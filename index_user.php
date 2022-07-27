<?php
require_once('otentifikasi.php');
include "tanggal.php";
if(isset($_REQUEST['page'])){
	$page= $_REQUEST['page'];
}else{
	$page='1';
}

function clean($str)
{
  $str = @trim($str);
  if (get_magic_quotes_gpc()) {
    $str = stripslashes($str);
  }
  return mysqli_real_escape_string($GLOBALS['conn'], $str);
}
?>
<?php
include("koneksi_db.php"); 
include("library.php");
?>


<?php include('partials/header.php') ?>
<style>
	.active-side{
		background-color: #23517f!important;
		color: white!important;
	}
</style>
<?php include('partials/navbar.php') ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-4">
			
			<div class="list-group" id="list-tab" role="tablist">
				<li class="list-group-item">Menu User</li>
				<a class="list-group-item list-group-item-action" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">
					<img src="gambar/iconprofile.png" width="48" height="48" />Profile
				</a>
				<a class="list-group-item list-group-item-action" id="list-password-list" data-toggle="list" href="#list-password" role="tab" aria-controls="password">
					<img src="gambar/ubahpassword.png" width="48" height="48" />Ubah Password
				</a>
				<a class="list-group-item list-group-item-action" id="list-diagnosa-list" data-toggle="list" href="#list-diagnosa" role="tab" aria-controls="diagnosa">
					<img src="gambar/diagnosa.png" width="48" height="48" />Diagnosa
				</a>
				<a class="list-group-item list-group-item-action" id="list-hasildiagnosa-list" data-toggle="list" href="#list-hasildiagnosa" role="tab" aria-controls="hasildiagnosa">
					<img src="gambar/lihathasil.png" width="48" height="48" />Lihat Hasil Diagnosa
				</a>
				<a class="list-group-item list-group-item-action" href="index.php">
					<img src="gambar/keluar.png" width="48" height="48" />Keluar
				</a>
			</div>
		</div>
		<div class="col-8">
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
					<div class="card">
						<div class="card-header">
							Profil
						</div>
						<div class="card-body">
							<?php include "profile_user.php" ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
					<div class="card">
						<div class="card-header">
							Ubah Password
						</div>
						<div class="card-body">
						<?php include "ubahpw_user.php" ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="list-diagnosa" role="tabpanel" aria-labelledby="list-diagnosa-list">
					<div class="card">
						<div class="card-header">
							Diagnosa
						</div>
						<div class="card-body">
						<?php include "diagnosa_user.php" ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="list-hasildiagnosa" role="tabpanel" aria-labelledby="list-hasildiagnosa-list">
					<div class="card">
						<div class="card-header">
							Hasil Diagnosa
						</div>
						<div class="card-body">
						<?php include "hasil_diagnosa_user.php" ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<script type="text/javascript">
				var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9", {
					minChars: 6,
					validateOn: ["blur"]
				});

				var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {
					minChars: 5,
					validateOn: ["blur"]
				});
				var sprytextfield4912 = new Spry.Widget.ValidationTextField("sprytextfield4912", "nama", {
					minChars: 2,
					validateOn: ["blur"]
				});
				var sprytextfield592 = new Spry.Widget.ValidationTextField("sprytextfield592", "integer", {
					validateOn: ["blur"]
				});
				var sprytextfield696 = new Spry.Widget.ValidationTextField("sprytextfield696", "alamat", {
					minChars: 4,
					validateOn: ["blur"]
				});
				var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779", "none", {
					minChars: 4,
					maxChars: 4,
					validateOn: ["blur"]
				});
				var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889", "nama", {
					validateOn: ["blur"]
				});
				var validsel = new Spry.Widget.ValidationSelect("validsel", {
					validateOn: ["blur"]
				});
			</script>
<?php include('partials/footer.php') ?>