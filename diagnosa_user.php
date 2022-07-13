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
						$u = $_SESSION['SESS_USERNAME'];
						$act = isset($_GET['act']);


						# Fungsi hapus tabel tmp_gejala
						function AddTmpGejala($kode_gejala, $u, $status)
						{
							$sql_gejala = "INSERT INTO tmp_gejala (username,kode_gejala,status) VALUES ('$u','$kode_gejala','$status')";
							mysqli_query($conn, $sql_gejala) or die(mysqli_error());
						}

						# Fungsi hapus tabel tmp_sakit
						function DelTmpSakit($u)
						{
							$sql_del = "DELETE FROM tmp_penyakit WHERE username='$u'";
							mysqli_query($conn, $sql_del) or die(mysqli_error());
						}

						# Fungsi hapus tabel tmp_analisa
						function DelTmpAnlisa($u)
						{
							$sql_del = "DELETE FROM tmp_analisa WHERE username='$u'";
							mysqli_query($conn, $sql_del) or die(mysqli_error());
						}

						function AddTmpAnalisa($kode_gejala, $u)
						{
							$sql_sakit = "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit 
				  WHERE relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit 
				  AND username='$u' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala";
							$qry_sakit = mysqli_query($conn, $sql_sakit) or die(mysqli_error());
							while ($data_sakit = mysqli_fetch_array($qry_sakit)) {
								$sqltmp = "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala)
					VALUES ('$u','$data_sakit[kode_penyakit]','$data_sakit[kode_gejala]')";
								mysqli_query($conn, $sqltmp) or die(mysqli_error());
							}
						}

						?>




						<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

						<div class="text_area" align="justify">
							<br>
							<div class="title">Diagnosa</div>
							<hr>
							<form action="proses_diagnosa.php" method="post">
								<B>Pilih Gejala yang anda alami :</b><br><br>
								<div style="height:450px;width:100%;font:10px;overflow:scroll;">
									<?php
									$qry = mysqli_query($conn, "SELECT * FROM gejala ORDER BY kode_gejala");
									while ($data = mysqli_fetch_array($qry)) {
									?>
										<input type="checkbox" name="check_list[]" value="<?php echo $data['kode_gejala']; ?>"><label><?php echo $data['nama_gejala']; ?></label>
										<br>
									<?php } ?>
								</div><br>
								<center><input type="submit" name="submit" Value="Submit" /></center>

							</form>












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