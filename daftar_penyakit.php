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
						<li role="presentation"><a href="index_pakar.php">Home</a></li>
						<li role="presentation"><a href="informasi_pakar.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel.php">Artikel</a></li>
						<li role="presentation"><a href="bantuan_pakar.php">Bantuan</a></li>
						<li role="presentation"><a href="about_pakar.php">About Us</a></li>
						<li role="presentation"><a href="contact_pakar.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>


		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-body">
						Menu Pakar
					</div>
					<div class="panel-footer"><img src="gambar/ubahpassword.png" width="48" height="48" /><a href="ubahpw_pakar.php">Ubah Password</a></div>
					<div class="panel-footer"><img src="gambar/daftar_penyakit.png" width="48" height="48" /><a href="daftar_penyakit.php">Daftar Penyakit</a></div>
					<div class="panel-footer"><img src="gambar/daftar_gejala.png" width="48" height="48" /><a href="daftar_gejala.php">Daftar Gejala</a></div>
					<div class="panel-footer"><img src="gambar/relasi.png" width="48" height="48" /><a href="relasi.php">Relasi</a></div>
					<div class="panel-footer"><img src="gambar/timbangan.png" width="48" height="48" /><a href="bobot_gejala.php">Bobot Gejala</a></div>
					<div class="panel-footer"><img src="gambar/artikel.png" width="48" height="48" /><a href="artikel.php">Artikel</a></div>
					<div class="panel-footer"><img src="gambar/peta.png" width="48" height="48" /><a href="lokasi.php">Lokasi</a></div>
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
						?>

						<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
						<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
						<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
						<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
						<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
						<?php include("koneksi_db.php");
						include("paging.php");
						$act = isset($_GET['act']);
						?>
						<div class="text_area" align="justify">
							<br />
							<div class="title">Pengolahan Data Penyakit</div>
							<br />
							<!--<form action="?page=4&act=caripenyakit" method="post">
<table align="center" cellpadding="5" cellspacing="0">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>-->

							</tr>
							<!--<tr>
    <td><div class="subtitle">Cari Data Nama Penyakit</div></td>
    <td><div class="subtitle">:</div></td>
    <td><span id="sprytextfield21"><input name="nama_penyakit" type="text" id="nama_penyakit" size="25" />
	<br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus diisi</span></span></td>
  </tr>-->
							<tr>
								<td colspan="3">
									<hr color="#AAAAAA">
								</td>

							</tr>
							<tr>
								<td></td>
								<td></td>
								<!--<td  align="right"><input type="submit" value="Cari" /></td>
    </tr>-->

								</table>
								</form>

								<?php $jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM penyakit"));
								echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record penyakit</center>"; ?>
								<br>
								<table table class="table table-bordered" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" id="pag">
									<tr tr bgcolor="gray" align="center">
										<td><b>
												<font color="white" size=3>Kode Penyakit</font>
											</b></td>
										<td><b>
												<font color="white" size=3>Nama Penyakit</font>
											</b></td>
										<td><b>
												<font color="white" size=3>Proses</font>
											</b></td>
									</tr>
									<?php


									$p = new Paging;
									$batas = 10;
									$posisi = $p->cariPosisi($batas);

									$no = 0;
									$qlog = mysqli_query($conn, "SELECT * FROM penyakit ORDER BY kode_penyakit ASC LIMIT $posisi,$batas");
									while ($data = mysqli_fetch_array($qlog)) {
										$no++;
									?>

										<tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
													else echo "isitabelgenap"; ?>">
											<td align="center" name="username"><?php echo $data['kode_penyakit']; ?></td>
											<td><?php echo $data['nama_penyakit']; ?></td>
											<td align="center"><a href="detailpenyakit.php?page=4&act=detailpenyakit&kode_penyakit=<?php echo $data['kode_penyakit']; ?>"><img src="gambar/detail.png" align="middle" width="20" border="0"> Detail</a>
												|<a href="editpenyakit.php?page=4&act=editpenyakit&kode_penyakit=<?php echo $data['kode_penyakit']; ?>"><img src="gambar/edit.png" width="20" align="middle" border="0"> Ubah</a>
												| <a href="?page=4&act=hapuspenyakit&kode_penyakit=<?php echo $data['kode_penyakit']; ?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')"><img src="gambar/hapus.png" width="20" align="middle" border="0"> Hapus</a>
											</td>
										</tr>
									<?php } ?>
									<tr tr bgcolor="gray">
										<td colspan="3" align="center">
											<a class="link" href="tambahpenyakit.php"><img src="gambar/add.png" width="20" border="0"> Tambah</a>
										</td>
									</tr>

								</table>
								<?php
								$jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM penyakit"));
								$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
								$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
								echo "<center>$linkHalaman</center>";
								?>


						</div>
					</div>

					<?php

					if ($act == "hapuspenyakit") {
						$kode_penyakit = @$_GET['kode_penyakit'];
						if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit'")) < 1) {
							if ($kode_penyakit != "") {
								mysqli_query($conn, "DELETE FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
								echo "<meta http-equiv=\"refresh\" content=\"0; url=daftar_penyakit.php\">";
							}
						} else {
							$qry = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
							$data = mysqli_fetch_array($qry);
							echo "<center><br><br><b>Maaf, penyakit <font color=red> $data[nama_penyakit]</font> tidak bisa dihapus karena sedang digunakan atau berelasi dengan suatu gejala.</b></center>";
					?><br>
							<center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
					<?php
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