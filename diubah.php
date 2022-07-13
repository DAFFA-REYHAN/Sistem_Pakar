<?php
session_start();
unset($_SESSION['SESS_USERNAME']);

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
	<?php include("library.php");
	include("koneksi_db.php"); ?>
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
						<li role="presentation"><a href="index.php">Home</a></li>
						<li role="presentation"> <a href="informasi.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi_display.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel_display.php">Artikel</a></li>
						<li role="presentation"><a href="bantuan.php">Bantuan</a></li>
						<li role="presentation"><a href="about.php">About Us</a></li>
						<li role="presentation"><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>

		</nav>




		<div class="jumbotron">
			<h2>Selamat Datang di Website Sistem Pakar Kejiwaan!</h2>
			<p>Daftarkan diri anda segera untuk menggunakan fasilitas diagnosis gangguan kejiwaan.</p>
			<a href="daftar.php" class="btn btn-large btn-success">Daftar</a>
		</div>


		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-footer">
						<form class="form-horizontal" role="form" method="post" action="login.php">
							<div class="form-group">
								<label for="username" class="col-sm-2 control-label">User</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" placeholder="Masukkan username">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" placeholder="Masukkan password">
								</div>
							</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">

							<div class="form-group">
								<label class="control-label col-xs-3">Status</label>
								<div class="col-xs-4">
									<label class="radio-inline">
										<input type="radio" name="status" value="pakar"> Pakar
									</label>
								</div>
								<div class="col-xs-4">
									<label class="radio-inline">
										<input type="radio" name="status" value="user"> User
									</label>
								</div>
							</div>

						</div>
						<div class="form-group">
							<div class="col-sm-offset-2">
								<button type="submit" class="btn btn-primary btn-lg active">Masuk</button>
								<a href="lupa_pw.php" class="btn btn-primary btn-lg active" role="button">Lupa Password</a>

							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-footer">
						</form>
						</form>
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

						<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
						<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
						<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />



















						<?php


						$act = isset($_GET['act']);
						if ($act == "0") {
							function clean($str)
							{
								$str = @trim($str);
								if (get_magic_quotes_gpc()) {
									$str = stripslashes($str);
								}
								return mysqli_real_escape_string($str);
							}
							$username = $_POST['username'];
							$status   = $_POST['status'];
							$jawaban  = clean($_POST['jawaban']);

							if ($status == 'user') {


								$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username' and jawaban='" . md5($_POST['jawaban']) . "'"));
							} else {

								$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pakar WHERE username='$username' and jawaban='" . md5($_POST['jawaban']) . "'"));
							}



							if ($cek > 0) {
						?>
								<div class="text_area" align="justify">
									<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
									<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
									<br />
									<div class="title">Kata Kunci Anda Berhasil Diubah</div>
									<form action="?page=5&act=1" method="post" align="left" cellpadding="5">
										<table align="left" cellpadding="5">
											<tr>
												<td colspan="3">
													<hr color="#AAAAAA">
												</td>

											</tr>
											<tr>
												<td colspan="3">
													<div class="subtitle">Isi Kata KunciBaru Anda</div>
												</td>
											</tr>
											<tr>
												<td valign="top">Nama Pengguna</td>
												<td valign="top">:</td>
												<td valign="bottom">
													<input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username; ?>" />

												</td>

											</tr>
											<tr>
												<td valign="top">Kata Kunci Baru</td>
												<td valign="top">:</td>
												<td valign="bottom"><span id="sprypassword">
														<input name="password" type="password" id="passwordbaru" size="15" maxlength="30" />
														<span class="passwordRequiredMsg"><img src="images/cancel_f2.png" width="10" height="10"> Kata Kunci Harus Diisi.</span>
														<span class="passwordMinCharsMsg"><img src="images/cancel_f2.png" width="10" height="10"> Minimal 6 karakter.</span></span>
													<br>
													<span class="style2">Panjang minimal 6 karakter.</span>
												</td>

											</tr>
											<tr>
												<td>Konfirmasi Kata Kunci Baru</td>
												<td>:</td>
												<td><span id="spryconfirm">
														<input name="passwordbaru2" type="password" size="15" maxlength="30" />
														<span class="confirmRequiredMsg"><img src="images/cancel_f2.png" width="10" height="10"> Konfirmasi Kata Kunci Harus Diisi.</span>
														<span class="confirmInvalidMsg"><img src="images/cancel_f2.png" width="10" height="10"> Kata Kunci Harus Cocok.</span></span></td>
											</tr>
											<tr>
												<td colspan="3">
													<hr color="#AAAAAA">
												</td>

											</tr>
											<tr>
												<td></td>
												<td></td>
												<td><input type="submit" name="act_simpan" value="Simpan" /></td>
											</tr>
										</table>


								</div>

						<?php

							} else {
								echo  "<meta http-equiv=\"refresh\" content=\"0; url=ubah.php\">";
							}
						}
						?>



						<?php
						if ($act == "1") {


							$username = $_GET['username'];
							$status   = $_GET['status'];
							$password = $_POST['password'];

							if ($status == 'user') {

								$qry = mysqli_query($conn, "UPDATE data_user SET password='" . md5($_POST['password']) . "' WHERE username='$username'");
							} else {
								$qry = mysqli_query($conn, "UPDATE data_pakar SET password='" . md5($_POST['password']) . "' WHERE username='$username'");
							}



							if ($qry) {
								echo "";;
							} else {
								echo "gagal";
							}
						}
						?>











						<script type="text/javascript">
							<!--
							var sprytextfield09 = new Spry.Widget.ValidationTextField("sprytextfield09", "none", {
								minChars: 4,
								maxChars: 4,
								validateOn: ["blur"]
							});
							var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88", "nama", {
								validateOn: ["blur"]
							});
							var sprytextfield70 = new Spry.Widget.ValidationTextField("sprytextfield70", "data", {
								minChars: 5,
								validateOn: ["blur"]
							});
							var sprypassword = new Spry.Widget.ValidationPassword("sprypassword", {
								minChars: 6,
								validateOn: ["blur"]
							});
							var sprytextfield08 = new Spry.Widget.ValidationTextField("sprytextfield08", "nama", {
								validateOn: ["blur"]
							});

							var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword", {
								validateOn: ["blur"]
							});

							//
							-->
						</script>















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