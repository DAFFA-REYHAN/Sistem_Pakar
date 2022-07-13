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
						include("koneksi_db.php");
						$act = isset($_GET['act']);
						$username = $_SESSION['SESS_USERNAME'];
						include("paging.php");
						if ($act == "0") {

							$cek_hasil = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE  username='$username'"));

							if ($cek_hasil > 0) {

						?>
								<br>
								<div class="text_area" align="justify">
									<div class="title"> Data Hasil Diagnosa</div>

									<table class='table' border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
										<tr bgcolor="gray" align="center">
											<td align="center"><b>
													<font color="white" size=2>No</font>
												</b></td>
											<td align="center"><b>
													<font color="white" size=2>Tanggal Diagnosa</font>
												</b></td>
											<td align="center"><b>
													<font color="white" size=2>Nama</font>
												</b></td>
											<td align="center"><b>
													<font color="white" size=2>Hasil Diagnosa</font>
												</b></td>
											<td align="center"><b>
													<font color="white" size=2>Proses</font>
												</b></td>

										</tr>
										<?php


										$username = $_SESSION['SESS_USERNAME'];
										$no = 0;
										$qlog = mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE username='$username' ORDER BY tanggal_diagnosa DESC");
										while ($data = mysqli_fetch_array($qlog)) {
											$tanggal = tgl_indo($data['tanggal_diagnosa']);
											$no++;
										?>

											<tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
														else echo "isitabelgenap"; ?>">
												<td align="center"><?php echo $no; ?></td>
												<td><?php echo $tanggal; ?></td>
												<td>
													<?php

													$dnama = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
													$nama = mysqli_fetch_array($dnama);

													echo $nama['nama_user']; ?></td>
												<td>
													<?php
													$qpenyakit = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$data[kode_penyakit]'");
													if (mysqli_num_rows($qpenyakit)) {
														$penyakit = mysqli_fetch_array($qpenyakit);
														echo $penyakit['nama_penyakit'] . "&nbsp;(" . $data['persentase'] . "%)";
													} else {
														echo 'Tidak Mengalami Penyakit';
													}
													?>
												</td>
												<td><a href="?page=8&act=detail&u=<?php echo $username; ?>&id=<?php echo $data['id_diagnosa']; ?>"><img src="gambar/searc.png" align="middle" width="20" border="0"> Detail</a></td>
											</tr>
										<?php
										}
										?>

									</table>
								</div>
							<?php
							} else {
							?>
								<br>
								<div class="text_area" align="justify">
									<div class="title"> Data Hasil Diagnosa Masih Kosong</div>
									<br><br>
									<div class="subtitle"> Anda Belum Melakukan Diagnosa</div>
								</div>
							<?php
							}
						}

						if ($act == 'detail') {

							$id = $_GET['id'];
							$username = $_SESSION['SESS_USERNAME'];
							$qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa,data_user WHERE hasil_diagnosa.id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
							$data = mysqli_fetch_array($qry);

							if ($data['kode_penyakit'] != '') {

								$qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, penyakit,data_user WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
								$data = mysqli_fetch_array($qry);
							?>
								<div class="text_area" align="justify">
									<br>
									<div class="title">Hasil Diagnosa</div>
									<br />
									<form action="javascript: void(0)" onclick="popup('cetak.php?act=detail&u=<?php echo $username; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
										<table cellpadding="5">
											<tr>
												<td colspan="3">
													<hr color="#AAAAAA">
												</td>

											</tr>
											<tr>
												<td height="30" colspan="3" class="subtitle">Biodata</td>
											</tr>
											<tr>
												<td>Nama</td>
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
												<td valign="top">Penyakit</td>
												<td valign="top">:</td>
												<td><?php echo $data['nama_penyakit']; ?></td>
											</tr>
											<tr>
												<td valign="top">Persentase</td>
												<td valign="top">:</td>
												<td><?php echo $data['persentase']; ?> persen</td>
											</tr>
											<tr>
												<td valign="top">Gejala Umum</td>
												<td valign="top">:</td>
												<td>
													<?php
													$sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala
						WHERE gejala.kode_gejala=relasi_penyakit_gejala.kode_gejala
						AND relasi_penyakit_gejala.kode_penyakit='$data[kode_penyakit]'";
													$qry_gejala = mysqli_query($conn, $sql_gejala);
													$i = 0;
													while ($hsl_gejala = mysqli_fetch_array($qry_gejala)) {
														$i++;
														echo "$i. $hsl_gejala[nama_gejala] <br>";
													}
													?>
												</td>
											</tr>
											<tr>
												<td valign="top">Definisi</td>
												<td valign="top">:</td>
												<td><?php echo $data['definisi']; ?></td>
											</tr>
											<tr>
												<td valign="top">Pengobatan</td>
												<td valign="top">:</td>
												<td><?php echo $data['pengobatan']; ?></td>
											</tr>
											<tr>
												<td valign="top">Pencegahan</td>
												<td valign="top">:</td>
												<td><?php echo $data['pengobatan']; ?></td>
											</tr>
											<tr>
												<td valign="top">Waktu Diagnosa</td>
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
													<input type="submit" name="submit" value="Cetak" />
												</td>
											</tr>
										</table>
								</div>
						<?php



							} else {
								echo "<meta http-equiv=\"refresh\" content=\"0; url=hasil0.php?page=7&act=hasil0\">";
							}
						}

						?>





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