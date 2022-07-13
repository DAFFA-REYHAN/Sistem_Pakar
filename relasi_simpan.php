<?php
require_once('otentifikasi.php');
if (isset($_REQUEST['kode_penyakit'])) {
	$kode_penyakit = $_REQUEST['kode_penyakit'];
} else {
	$kode_penyakit = '';
}
?>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<?php
include("koneksi_db.php");
$act = isset($_GET['act']);
?>
<script type="text/javascript">
	<!--
	function MM_jumpMenu(targ, selObj, restore) { //v3.0
		eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
		if (restore) selObj.selectedIndex = 0;
	}
	//
	-->
</script>

<?php
if ($act == "simpanrelasi") {
	$kode_penyakit = $_POST['kode_penyakit'];
	$cekgejala = $_POST['cekgejala'];

	$jum = count($cekgejala);
	if ($jum == 0) {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=relasi.php\">";
	} else {
		$qpil = mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit'");
		while ($datapil = mysqli_fetch_array($qpil)) {
			for ($i = 0; $i < $jum; ++$i) {
				if ($datapil['kode_gejala'] != $cekgejala[$i]) {
					mysqli_query($conn, "DELETE FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit' AND NOT kode_gejala IN('$cekgejala[$i]')");
				}
			}
		}
		for ($i = 0; $i < $jum; ++$i) {
			$qryr = mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$cekgejala[$i]'");
			$cocok = mysqli_num_rows($qryr);
			if (!$cocok == 1) {
				mysqli_query($conn, "INSERT INTO relasi_penyakit_gejala(kode_penyakit, kode_gejala) VALUES('$kode_penyakit', '$cekgejala[$i]')");
				$gejala = $cekgejala[$i] . ",";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=relasi.php\">";
			}
		}
		echo "<meta http-equiv=\"refresh\" content=\"0; url=relasi.php\">";
	}
}
?>