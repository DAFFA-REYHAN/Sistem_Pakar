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
		<h1><a href="#">Website Kejiwaan</a></h1>

		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav nav-tabs nav-justified">
						<li role="presentation">
							<?= "$tglsekarang"; ?>

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
						?>
						<div class="alert alert-danger" role="alert">Selamat Datang <?= $username; ?></div>



						<!--<img src="images/89.jpg" title="user" width="200" height="200" class="templatemo_pic" /></div>-->
						<?php
						$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
						$data = mysqli_fetch_array($qry);
						?>


						<br>
						<link href="style.css" rel="stylesheet" type="text/css">
						<div class="text_area" align="justify">
							<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
							<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
							<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
							<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
							<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
							<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
							<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
							<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
							<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
							<div class="title">Ubah Profil <?= $username; ?></div>
							<br>
							<form action="?page=9&act=acubahprofil&u=<?= $username; ?>" method="post" align="left" cellpadding="5">
								<table>
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>

									<tr>
										<td colspan="3">
											<div class="subtitle">Biodata </div>
										</td>

									</tr>
									<tr>
										<td>Nama </td>
										<td>:</td>
										<td><span id="sprytextfield491">
												<input name="nama_user" type="text" size="30" maxlength="30" value="<?= $data['nama_user']; ?>">
												<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Anda harus diisi.</span>
												<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 2 karakter.</span>
												<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span></span></td>
									</tr>
									<tr>
										<td valign="top">Usia</td>
										<td valign="top">:</td>
										<td><span id="sprytextfield59">
												<input name="usia" type="text" size="30" maxlength="30" value="<?= $data['usia'] ?>">
												<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Usia Anda harus diisi.</span>
												<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
											</span>
										</td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td><select name="jenis_kelamin">
												<option value="#">Pilih Jenis Kelamin</option>
												<option value="L" <?php if ($data['jenis_kelamin'] == 'L') echo "selected" ?>>Laki-laki</option>
												<option value="P" <?php if ($data['jenis_kelamin'] == 'P') echo "selected" ?>>Perempuan</option>
											</select></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><span id="sprytextfield69">
												<input name="alamat" type="text" size="50" maxlength="100" value="<?= $data['alamat']; ?>" />
												<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Alamat harus diisi.</span>
												<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 4 karakter.</span>
												<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
											</span></td>
									</tr>
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>


									<tr>
										<td>Validasi</td>
										<td>:</td>
										<td>
											<div class="g-recaptcha" data-sitekey="6LcEVPUgAAAAAFLhguztcrcslhUU6-uuZYkau_No"></div>
										</td>

									</tr>
									<tr>
										<td colspan="3">
											<hr color="#AAAAAA">
										</td>

									</tr>
									<tr>
										<td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
											<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
										</td>
									</tr>
								</table>
							</form>
						</div>

						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<script type="text/javascript">
							var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9", {
								minChars: 6,
								validateOn: ["blur"]
							});

							var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {
								minChars: 5,
								validateOn: ["blur"]
							});
							var sprytextfield491 = new Spry.Widget.ValidationTextField("sprytextfield491", "nama", {
								minChars: 2,
								validateOn: ["blur"]
							});
							var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59", "integer", {
								validateOn: ["blur"]
							});
							var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69", "alamat", {
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


						<?php

						if ($act == "acubahprofil" && isset($_POST['tombol'])) {
							include "koneksi_db.php";
							function clean($str)
							{
								$str = @trim($str);
								if (get_magic_quotes_gpc()) {
									$str = stripslashes($str);
								}
								return mysqli_real_escape_string($GLOBALS['conn'], $str);
							}

							$username = $_GET['u'];

							//Sanitize the POST values

							$nama_user = clean($_POST['nama_user']);
							$usia = clean($_POST['usia']);
							$jenis_kelamin = clean($_POST['jenis_kelamin']);
							$alamat = clean($_POST['alamat']);







							if (isset($_POST['tombol'])) {
								if ($_POST['g-recaptcha-response'] != "") {

									$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'"));

									if ($cek > 0) {
										$qry = mysqli_query($conn, "UPDATE data_user SET nama_user='$nama_user', usia='$usia', jenis_kelamin='$jenis_kelamin', alamat='$alamat'
	    WHERE username='$username'");

										echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?page=9&current9=curren&act=berhasil&u=$username\">";
									} else {
										echo  "<meta http-equiv=\"refresh\" content=\"0; url=?page=9&current9=curren&act=gagal&u=$username\">";
									}
								} else {
									echo "<meta http-equiv=\"refresh\" content=\"0; url=?page=9&current9=curren&act=gagal2&u=$username\">";
								}
							}
						} elseif ($act == "berhasil") {
						?>
							<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
							<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
							<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
							<div class="text_area" align="justify">
								<br />
								<div class="title">Profil <?= $username; ?> Berhasil Disimpan</div>
								<?php


								$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
								$data = mysqli_fetch_array($qry);

								?>
								<form action="?page=9&act=ubahprofil&u=<?= $username; ?>" method="post" align="left" cellpadding="5">
									<table align="left" cellpadding="5">
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>
										<tr>
											<td colspan="3">
												<div class="subtitle">Biodata </div>
											</td>

										</tr>
										</tr>
										<tr>
											<td valign="top">Nama </td>
											<td valign="top">:</td>
											<td valign="bottom"><?= $data['nama_user']; ?>
										</tr>
										<tr>
											<td valign="top">Usia</td>
											<td valign="top">:</td>
											<td valign="bottom"><?= $data['usia']; ?> tahun
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
											<td valign="bottom"><?= $data['alamat']; ?>
										</tr>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>


									</table>

							</div>

						<?php

						} elseif ($act == "gagal") {

							$username = $_GET['u'];
							$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
							$data = mysqli_fetch_array($qry);


						?>
							<br>
							<link href="style.css" rel="stylesheet" type="text/css">
							<div class="text_area" align="justify">
								<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
								<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
								<div class="title">
									<font color="red">Ubah Profil <?= $username; ?> Gagal Disimpan</font>
								</div>
								<br>
								<form action="?page=9&act=acubahprofil&u=<?= $username; ?>" method="post" align="left" cellpadding="5">
									<table>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>

										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td colspan="3">
												<div class="subtitle">Biodata</div>
											</td>

										</tr>
										<tr>
											<td>Nama </td>
											<td>:</td>
											<td><span id="sprytextfield49">
													<input name="nama_user" type="text" size="30" maxlength="30" value="<?= $data['nama_user']; ?>">
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Anak harus diisi.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 2 karakter.</span>
													<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span></span></td>
										</tr>
										<tr>
											<td valign="top">Usia</td>
											<td valign="top">:</td>
											<td valign="bottom">
												<span id="validsel">
													<select name="usia">
														<option value="1" <?php if ($data['usia'] == '1') echo 'selected'; ?>>1 Tahun</option>
														<option value="2" <?php if ($data['usia'] == '2') echo 'selected'; ?>>2 Tahun</option>
														<option value="3" <?php if ($data['usia'] == '3') echo 'selected'; ?>>3 Tahun</option>
														<option value="4" <?php if ($data['usia'] == '4') echo 'selected'; ?>>4 Tahun</option>
														<option value="5" <?php if ($data['usia'] == '5') echo 'selected'; ?>>5 Tahun</option>
														<option value="6" <?php if ($data['usia'] == '6') echo 'selected'; ?>>6 Tahun</option>
														<option value="7" <?php if ($data['usia'] == '7') echo 'selected'; ?>>7 Tahun</option>
														<option value="8" <?php if ($data['usia'] == '8') echo 'selected'; ?>>8 Tahun</option>
														<option value="9" <?php if ($data['usia'] == '9') echo 'selected'; ?>>9 Tahun</option>
														<option value="10" <?php if ($data['usia'] == '10') echo 'selected'; ?>>10 Tahun</option>
														<option value="11" <?php if ($data['usia'] == '11') echo 'selected'; ?>>11 Tahun</option>
														<option value="12" <?php if ($data['usia'] == '12') echo 'selected'; ?>>12 Tahun</option>
													</select>
													<span class="selectRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Usia Anak harus dipilih.</span></span>
											</td>
										</tr>
										<tr>
											<td>Jenis Kelamin</td>
											<td>:</td>
											<td><input name="jenis_kelamin" type="radio" value="L" <?php if ($data['jenis_kelamin'] == 'L') echo 'checked'; ?>> Laki-laki
												<input name="jenis_kelamin" type="radio" value="P" <?php if ($data['jenis_kelamin'] == 'P') echo 'checked'; ?>> Perempuan
											</td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td>:</td>
											<td><span id="sprytextfield69">
													<input name="alamat" type="text" size="50" maxlength="100" value="<?= $data['alamat']; ?>" />
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Alamat harus diisi.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 4 karakter.</span>
													<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
												</span></td>
										</tr>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td colspan="3">
												<div class="subtitle">Jika Anda Lupa Kata Sandi</div>
											</td>
										</tr>

										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td>Masukan Angka Berikut</td>
											<td>:</td>
											<td><span id="sprytextfield779">
													<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12" />
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
													<span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>

										</tr>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
												<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
											</td>
										</tr>
									</table>
								</form>
							</div>


						<?php
						} elseif ($act == "gagal2") {

							$username = $_GET['u'];
							$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
							$data = mysqli_fetch_array($qry);


						?>
							<br>
							<link href="style.css" rel="stylesheet" type="text/css">
							<div class="text_area" align="justify">
								<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
								<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
								<div class="title">
									<font color="red">Ubah Profil <?= $username; ?> Gagal Disimpan</font>
								</div>
								<br>
								<form action="?page=9&act=acubahprofil&u=<?= $username; ?>" method="post" align="left" cellpadding="5">
									<table>


										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td colspan="3">
												<div class="subtitle">Biodata</div>
											</td>

										</tr>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td><span id="sprytextfield49">
													<input name="nama_user" type="text" size="30" maxlength="30" value="<?= $data['nama_user']; ?>">
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Anak harus diisi.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 2 karakter.</span>
													<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span></span></td>
										</tr>
										<tr>
											<td valign="top">Usia</td>
											<td valign="top">:</td>
											<td valign="bottom">
												<span id="validsel">
													<input name="usia2" type="text" size="30" maxlength="30" />
													<span class="selectRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Usia Anak harus dipilih.</span></span>
											</td>
										</tr>
										<tr>
											<td>Jenis Kelamin</td>
											<td>:</td>
											<td><select name="jenis_kelamin">
													<option value="#">Pilih Jenis Kelamin</option>
													<option value="L">Laki-laki</option>
													<option value="P">Perempuan</option>
												</select></td>
										</tr>
										</td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td>:</td>
											<td><span id="sprytextfield69">
													<input name="alamat" type="text" size="50" maxlength="100" value="<?= $data['alamat']; ?>" />
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Alamat harus diisi.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 4 karakter.</span>
													<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
												</span></td>
										</tr>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>


										<tr>
											<td>Masukan Angka Berikut</td>
											<td>:</td>
											<td><span id="sprytextfield779">
													<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12" />
													<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
													<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
													<span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span></span>
												<br><span class="style2">
													<font color="red"><strong> Masukan Angka Salah</strong></font>
												</span>
											</td>

										</tr>
										<tr>
											<td colspan="3">
												<hr color="#AAAAAA">
											</td>

										</tr>
										<tr>
											<td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
												<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
											</td>
										</tr>
									</table>
								</form>
							</div>


						<?php
						}


						?>
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<script type="text/javascript">
							var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9", {
								minChars: 6,
								validateOn: ["blur"]
							});

							var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {
								minChars: 5,
								validateOn: ["blur"]
							});
							var sprytextfield491 = new Spry.Widget.ValidationTextField("sprytextfield491", "nama", {
								minChars: 2,
								validateOn: ["blur"]
							});
							var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59", "integer", {
								validateOn: ["blur"]
							});
							var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69", "alamat", {
								minChars: 4,
								validateOn: ["blur"]
							});

							var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889", "nama", {
								validateOn: ["blur"]
							});
							var validsel = new Spry.Widget.ValidationSelect("validsel", {
								validateOn: ["blur"]
							});



							//
						</script>







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