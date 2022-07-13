<?php
require_once('otentifikasi.php');
include "tanggal.php";
if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = '1';
}
?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/gif" href="images/gun.gif">

<head>
	<meta charset="utf-8">
	<title>Sistem Pakar Kejiwaan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type='text/javascript'>
		msg = " -- Selamat datang di website ";
		msg = " Sistem Pakar Diagnosa Gangguan Kejiwaan-- " + msg;
		pos = 0;

		function scrollMSG() {
			document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
			pos++;
			if (pos > msg.length) pos = 0
			window.setTimeout("scrollMSG()", 200);
		}
		scrollMSG();
	</script>

	<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
	<?php
	require_once('otentifikasi.php');
	include("library.php"); ?>
	<script type="text/javascript">
		//fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
		function displayTime() {
			//buat object date berdasarkan waktu saat ini
			var time = new Date();
			//ambil nilai jam,
			//tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
			var sh = time.getHours() + "";
			//ambil nilai menit
			var sm = time.getMinutes() + "";
			//ambil nilai detik
			var ss = time.getSeconds() + "";
			//tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
			document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
		}
	</script>

</head>

<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav nav-tabs nav-justified">
						<li role="presentation">
							<?php echo "$tglsekarang"; ?>

						</li>
						<li role="presentation"><a href="index_user.php">Home</a></li>
						<li role="presentation"><a href="informasi_user.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi_user.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel_user.php">Artikel</a></li>
						<li role="presentation"><a href="bantuan_user.php">Bantuan</a></li>
						<li role="presentation"><a href="about_user.php">About Us</a></li>
						<li role="presentation"><a href="contact_user.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>


		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-body">
						Menu User
					</div>
					<div class="panel-footer"><img src="gambar/iconprofile.png" width="48" height="48" /><a href="profile_user.php">Profile</a></div>
					<div class="panel-footer"><img src="gambar/ubahpassword.png" width="48" height="48" /><a href="ubahpw_user.php">Ubah Password</a></div>
					<div class="panel-footer"><img src="gambar/diagnosa.png" width="48" height="48" /><a href="diagnosa_user.php">Diagnosa</a></div>
					<div class="panel-footer"><img src="gambar/lihathasil.png" width="48" height="48" /><a href="hadil_diagnosa_user.php">Lihat Hasil Diagnosa</a></div>
					<div class="panel-footer"><img src="gambar/keluar.png" width="48" height="48" /><a href="index.php">Keluar</a></div>
				</div>



				<div class="panel panel-info">
					<div class="panel-footer">

						<ul class="nav nav-list">
							<li class="nav-header">Website Kejiwaan Lainnya :</li>
							<li class="active"><a href="http://www.pdskji.org/home">http://www.pdskji.org/home</a></li>
							<li><a href="http://www.lahargokembaren.com/">http://www.lahargokembaren.com/</a></li>
							<li><a href="http://www.budiannakeliat.com/">http://www.budiannakeliat.com/</a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-body">

						<?php
						require_once('otentifikasi.php');
						$username = $_SESSION['SESS_USERNAME'];
						include("koneksi_db.php");
						$act = isset($_GET['act']);
						?>
						<?php
						$u = $_SESSION['SESS_USERNAME'];
						$qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, penyakit, data_user WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND hasil_diagnosa.username='$u' AND hasil_diagnosa.username=data_user.username ORDER BY hasil_diagnosa.id_diagnosa DESC LIMIT 1") or die(mysqli_error());
						$data = mysqli_fetch_array($qry);
						$id = $data['id_diagnosa'];
						mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
						mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
						mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");
						?>



						<div class="text_area" align="justify">
							<br>
							<div class="title">Hasil Diagnosa</div>
							<br />
							<form action="javascript: void(0)" onclick="popup('cetak.php?u=<?php echo $u; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
								<table cellpadding="5">
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>
									<tr>
										<td height="30" colspan="3" class="subtitle">Biodata </td>
									</tr>
									<tr>
										<td>Nama </td>
										<td>:</td>
										<td><?php echo $data['nama_user']; ?></td>
									</tr>
									<tr>
										<td>Usia</td>
										<td>:</td>
										<td><?php echo $data['usia']; ?> tahun</td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td><?php if ($data['jenis_kelamin'] == 'L') echo "Laki-laki";
											else echo "Perempuan"; ?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><?php echo $data['alamat']; ?></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>

									<tr>
										<td colspan="3" class="subtitle">Hasil Diagnosa</td>
									</tr>

									<tr>
										<td>Kesimpulan</td>
										<td valign="top">:</td>
										<td>Hasil kesimpulan diagnosa berdasarkan proses sistem dari data yang anda masukkan, anda tidak mengalami gangguan kejiwaan apapun, segera konsultasikan diri anda ke ahli kejiwaan karena mungkuin
											penyakit yang anda derita belum terdaftar di database sistem kami.</td>
									</tr>

									<tr>
										<td>Waktu Diagnosa</td>
										<td valign="top">:</td>
										<td valign="top"><?php echo tgl_indo($data['tanggal_diagnosa']); ?></td>
									</tr>
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>
									<tr>
										<td colspan="3" align="center">

									</tr>
								</table>
						</div>




















					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>
						Design by Jesreel Surbakti | jeareel22@gmail.com | © Copyright 2015
					</center>
				</div>
			</div>
		</div>
	</div>

	</div> <!-- end dari class container -->



	<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.js"></script>




</body>

</html>