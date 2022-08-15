<?php

$username = $_SESSION['SESS_USERNAME'];
?>
<?php

if (isset($_POST['tombol-profil'])) {
	if ($_POST['g-recaptcha-response'] != "") {
		$username = $_SESSION['SESS_USERNAME'];

		//Sanitize the POST values

		$nama_user = clean($_POST['nama_user']);
		$usia = clean($_POST['usia']);
		$jenis_kelamin = clean($_POST['jenis_kelamin']);
		$alamat = clean($_POST['alamat']);

		$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'"));

		if ($cek > 0) {
			$qry = mysqli_query($conn, "UPDATE data_user SET nama_user='$nama_user', usia='$usia', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE username='$username'");

			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php\">";
			$_SESSION['sukses'] = "berhasil merubah profil";
			exit();
		} else {
			echo  "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php\">";
			$_SESSION['gagal'] = "gagal merubah profil";
			exit();
		}
	} else {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php\">";
		$_SESSION['gagal'] = "gagal merubah profil";
		exit();
	}
}
?>
<div class="alert alert-success" role="alert">Selamat Datang <?php echo $username; ?></div>



<!--<img src="images/89.jpg" title="user" width="200" height="200" class="templatemo_pic" /></div>-->
<?php
$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
$data = mysqli_fetch_array($qry);
?>

<table class="table table-striped">
	<th>


		<div class="subtitle">Biodata</div>
	<th>
	<th>
	</th>
	</th>
	</th>
	<tr>
		<td valign="top">Nama </td>
		<td valign="top">:</td>
		<td valign="bottom"><?php echo $data['nama_user']; ?>
	</tr>
	<tr>
		<td valign="top">Usia</td>
		<td valign="top">:</td>
		<td valign="bottom"><?php echo $data['usia']; ?> tahun
	</tr>
	<tr>
		<td valign="top">Jenis Kelamin</td>
		<td valign="top">:</td>
		<td valign="bottom"><?php if ($data['jenis_kelamin'] == 'L') {
								echo 'Laki-Laki';
							} else {
								echo 'Perempuan';
							}; ?>
	</tr>
	<tr>
		<td valign="top">Alamat</td>
		<td valign="top">:</td>
		<td valign="bottom"><?php echo $data['alamat']; ?>
	</tr>
	<tr>
		<td colspan="3">
			<hr color="#AAAAAA">
		</td>

	</tr>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahProfil">
	Ubah Profil
</button>

<!-- Modal -->
<div class="modal fade" id="ubahProfil" tabindex="-1" aria-labelledby="ubahProfilLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahProfilLabel">Ubah Profil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php include "ubah_profile_user.php" ?>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>