<script type="text/javascript">
	function popup(url) 
	{
		var width = 770;
		var height = 300;
		var left = (screen.width - width) / 2;
		var top = (screen.height - height) / 2;
		var params = 'width=' + width + ', height=' + height;
		params += ', top=' + top + ', left=' + left;
		params += ', directories=no';
		params += ', location=no';
		params += ', menubar=no';
		params += ', resizable=yes';
		params += ', scrollbars=yes';
		params += ', status=no';
		params += ', toolbar=no';
		newwin = window.open(url, 'funnyfacebox', params);
		if (window.focus) {
			newwin.focus()
		}
		return false;
	}
</script>

<?php
	function koneksi_db()
	{
		$is_localhost = true;
		if ($is_localhost) {
			$host = "localhost";
			$database = "sispak";
			$user = "root";
			$password = "";
		} else {
			$host = "";
			$database = "";
			$user = "";
			$password = "";
		}
		$link = mysqli_connect($host, $user, $password);
		mysqli_select_db($database, $link);
		if (!$link)
			echo "Error : " . mysqli_errno();
		return $link;
	}

	function footer_web()
	{
?>
		<center>
			<br>
			<small>
			<br>
			<br>
			</small>
		</center>
<?php
	}

	function navigator_web()
	{
		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = '1';
		}
?>
		<li><a <?php echo ($page == '2') ? "class='current'" : ""; ?> href="?page=2"><img src="images/bantuan.png" width="25" height="25" align="middle" border=0px /> Bantuan</a></li>
		<li><a <?php echo ($page == '3') ? "class='current'" : ""; ?> href="?page=3"><img src="images/info.png" width="25" height="25" align="middle" border=0px /> Informasi</a></li>
		<li><a <?php echo ($page == '1') ? "class='current'" : ""; ?> href="./"><img src="images/home.png" width="25" height="25" align="middle" border=0px /> Halaman Utama</a></li>
<?php
	}

	function navigator_web_pakar()
	{
		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = '1';
		}
?>
		<li><a <?php echo ($page == '2') ? "class='current'" : ""; ?> href="pakar_index.php?page=2"><img src="images/bantuan.png" width="25" height="25" align="middle" border=0px /> Bantuan</a></li>
		<li><a <?php echo ($page == '3') ? "class='current'" : ""; ?> href="pakar_index.php?page=3"><img src="images/info.png" width="25" height="25" align="middle" border=0px /> Informasi</a></li>
		<li><a <?php echo ($page == '1') ? "class='current'" : ""; ?> href="pakar_index.php?page=1"><img src="images/home.png" width="25" height="25" align="middle" border=0px /> Halaman Utama</a></li>
<?php
	}

	function navigator_web_user()
	{
		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = '1';
		}
?>
		<li><a <?php echo ($page == '2') ? "class='current'" : ""; ?> href="user_index.php?page=2"><img src="images/bantuan.png" width="25" height="25" align="middle" border=0px /> Bantuan</a></li>
		<li><a <?php echo ($page == '3') ? "class='current'" : ""; ?> href="user_index.php?page=3"><img src="images/info.png" width="25" height="25" align="middle" border=0px /> Informasi</a></li>
		<li><a <?php echo ($page == '1') ? "class='current'" : ""; ?> href="user_index.php?page=1"><img src="images/home.png" width="25" height="25" align="middle" border=0px /> Halaman Utama</a></li>
<?php
	}

	function menu_pakar()
	{
		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = '1';
		}
?>
		<ul class="glossymenu">
			<li><a <?php echo ($page == '7') ? "class='current'" : ""; ?> href="pakar_index.php?page=7&act=ubahpass&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"><img src="images/config.png" width="25" height="25" align="middle" border=0px /> Ubah Kata Kunci</a></li>
			<li><a <?php echo ($page == '4') ? "class='current'" : ""; ?> href="pakar_index.php?page=4&act=tampilpenyakit"><img src="images/addedit.png" width="25" height="25" align="middle" border=0px /> Daftar Penyakit</a></li>
			<li><a <?php echo ($page == '5') ? "class='current'" : ""; ?> href="pakar_index.php?page=5&act=tampilgejala"><img src="images/addedit.png" width="25" height="25" align="middle" border=0px /> Daftar Gejala </a></li>
			<li><a <?php echo ($page == '6') ? "class='current'" : ""; ?> href="pakar_index.php?page=6&act=relasi"><img src="images/addedit.png" width="25" height="25" align="middle" border=0px /> Relasi</a></li>
			<li><a <?php echo ($page == '8') ? "class='current'" : ""; ?>href="pakar_index.php?page=8&act=0"><img src="images/addedit.png" width="25" height="25" align="middle" border=0px /> Bobot Gejala</a></li>
			<li><a href="index.php" onClick="return confirm('Apakah Anda Yakin Akan Logout Dari Halaman ini?')"><img src="images/restore_f2.png" width="25" height="25" align="middle" border=0px /> Keluar</a></li>
		</ul>
<?php
	}

	function menu_user()
	{
		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = '1';
		}
?>
		<ul class="glossymenu">
			<li><a <?php echo ($page == '9') ? "class='current'" : ""; ?> href="user_index.php?page=9&act=tampilprofil&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"><img src="images/user.png" width="25" height="25" align="middle" border=0px /> Profil </a></li>
			<li><a <?php echo ($page == '10') ? "class='current'" : ""; ?> href="user_index.php?page=10&act=ubahpass&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"><img src="images/config.png" width="25" height="25" align="middle" border=0px /> Ubah Kata Kunci</a></li>
			<li><a <?php echo ($page == '7') ? "class='current'" : ""; ?> href="user_index.php?page=7&act=diagnosa&induk=&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"><img src="images/langmanager.png" width="25" height="25" align="middle" border=0px /> Diagnosa</a></li>
			<li><a <?php echo ($page == '8') ? "class='current'" : ""; ?> href="user_index.php?page=8&act=0&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"><img src="images/query.png" width="25" height="25" align="middle" border=0px /> Lihat Hasil Diagnosa </a></li>
			<li><a href="index.php" onClick="return confirm('Apakah Anda Yakin Akan Keluar Dari Halaman ini?')"><img src="images/restore_f2.png" width="25" height="25" align="middle" border=0px /> Keluar</a></li>
		</ul>
<?php
	}

	function form_login()
	{
?>
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
		<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
		<br />
		<div class="section_box3" align="justify">
			<div class="subtitle"><img src="images/log.png" width="29" height="32" align="middle" /> LOG MASUK</div>
				<form action="login.php" method="post">
					<p>NAMA PENGGUNA
						<span id="sprytextfield1">
							<input name="username" type="text" id="username" size="20" maxlength="30" />
							<br>
							<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Pengguna Harus Diisi</span>
						</span>
						<br />
						KATA KUNCI
						<span id="sprytextfield2">
							<input name="password" type="password" id="password" size="20" maxlength="10" />
							<br>
							<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Kata Kunci Harus Diisi</span>
						</span>
						<br />
						<input type="radio" name="status" value="user" checked />
						PENGGUNA
						<input type="radio" name="status" value="pakar" />
						PAKAR
						<br /><br /><input type="submit" name="login" id="login" value="LOG MASUK" onclick="radio_box(this.form)" />
						<br />
					<div align="right"><a href="index.php?page=5&act=lupa">Lupa Kata Kunci</a></div>
			</div>
			<div class="section_box3">
				<div align="center">
					<p>Jika Belum Terdaftar Klik : </p>
					<p>
					<div class="subtitle"><a href="index.php?page=4"><img src="images/regis.png" width="29" height="32" align="middle" border=0px />
							<blink>PENDAFTARAN</blink>
						</a>
					</div>
					</p>
				</div>
			</div>
			</form>
			<br />
		<script type="text/javascript">
			var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
			var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
		</script>
<?php
	}

	#fungsi untuk membuat kode otomatis untuk penyakit
	function kdautopenyakit($tabel, $inisial)
	{
		$conn 		= mysqli_connect("localhost", "root", "", "sispak");
		$struktur	= mysqli_query($conn, "SELECT * FROM $tabel");
		$field		= mysqli_fetch_field_direct($struktur, 0)->name;
		$panjang	= mysqli_fetch_field_direct($struktur, 0)->max_length;

		$qry	= mysqli_query($conn, "SELECT max(" . $field . ") FROM " . $tabel);
		$row	= mysqli_fetch_array($qry);
		if ($row[0] == "") {
			$angka = 1;
			$inisial = 'P';
			$tmp = "000";
			return $inisial . $tmp . $angka;
		} else {
			$angka = substr($row[0], strlen($inisial));
		}

		$angka++;
		$angka = strval($angka);
		$tmp = "";
		for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
			$tmp = $tmp . "0";
		}
		return  $inisial . $tmp . $angka;
	}

	#fungsi untuk membuat kode otomatis untuk relasi
	function kdautorelasi($tabel, $inisial)
	{
		$conn 		= mysqli_connect("localhost", "root", "", "sispak");
		$struktur	= mysqli_query($conn, "SELECT * FROM $tabel");
		$field		= mysqli_fetch_field_direct($struktur, 0)->name;
		$panjang	= mysqli_fetch_field_direct($struktur, 0)->max_length;

		// return $panjang;
		$qry	= mysqli_query($conn, "SELECT max(" . $field . ") FROM " . $tabel);
		$row	= mysqli_fetch_array($qry);
		if ($row[0] == "") {
			$angka = 0;
		} else {
			$angka = substr($row[0], strlen($inisial));
		}

		$angka++;
		$angka = strval($angka);
		$tmp = "";
		for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
			$tmp = $tmp . "0";
		}
		return  $inisial . $tmp . $angka;
	}

	#fungsi untuk membuat kode otomatis untuk gejala
	function kdautogejala($tabel, $inisial)
	{
		$conn 		= mysqli_connect("localhost", "root", "", "sispak");
		$struktur	= mysqli_query($conn, "SELECT * FROM $tabel");
		$field		= mysqli_fetch_field_direct($struktur, 0)->name;
		$panjang	= mysqli_fetch_field_direct($struktur, 0)->max_length;

		$qry	= mysqli_query($conn, "SELECT max(" . $field . ") FROM " . $tabel);
		$row	= mysqli_fetch_array($qry);
		if ($row[0] == "") {
			$angka = 1;
			$inisial = 'G';
			$tmp = "000";
			return $inisial . $tmp . $angka;
		} else {
			$angka = substr($row[0], strlen($inisial));

			$angka++;
			$angka = strval($angka);
			$tmp = "";
			for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
				$tmp = $tmp . "0";
			}
			return $inisial . $tmp . $angka;
		}
	}

	function kdautoartikel($tabel, $inisial)
	{
		$conn 		= mysqli_connect("localhost", "root", "", "sispak");
		$struktur	= mysqli_query($conn, "SELECT * FROM $tabel");
		$field		= mysqli_fetch_field_direct($struktur, 0)->name;
		$panjang	= mysqli_fetch_field_direct($struktur, 0)->max_length;

		$qry	= mysqli_query($conn, "SELECT max(" . $field . ") FROM " . $tabel);
		$row	= mysqli_fetch_array($qry);
		if ($row[0] == "") {
			$angka = 1;
			$inisial = 'A';
			$tmp = "000";
			return $inisial . $tmp . $angka;
		} else {
			$angka = substr($row[0], strlen($inisial));
		}

		$angka++;
		$angka = strval($angka);
		$tmp = "";
		for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
			$tmp = $tmp . "0";
		}
		return  $inisial . $tmp . $angka;
	}

	#fungsi untuk konversi tanggal dari mysql ke tgl indonesia
	function tgl_indo($tgl)
	{
		$tanggal = substr($tgl, 8, 2);
		$bulan    = getBulan(substr($tgl, 5, 2));
		$tahun    = substr($tgl, 0, 4);
		$jam      = substr($tgl, 11, 8);
		return $tanggal . " " . $bulan . " " . $tahun . " " . $jam;
	}

	function getBulan($bln)
	{
		switch ($bln) {
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
?>