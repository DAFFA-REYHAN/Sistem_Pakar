<?php
require_once('otentifikasi.php');
if (isset($_REQUEST['kode_penyakit'])) {
	$kode_penyakit = $_REQUEST['kode_penyakit'];
} else {
	$kode_penyakit = '';
}
?>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

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
if ($act == "simpanbobot") {
	$kode_penyakit = $_POST['kode_penyakit'];
	$bobot = $_POST['bobot'];
	$kode_gejala = $_POST['kode_gejala'];




	$jum = count($kode_gejala);
	$total = 0;
	for ($i = 0; $i < $jum; ++$i) {
		$total = $total + $bobot[$i];
	}

	if ($total == 100) {

		for ($i = 0; $i < $jum; ++$i) {
			$qryr = mysqli_query($conn, "UPDATE  relasi_penyakit_gejala SET bobot='$bobot[$i]' WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$kode_gejala[$i]'");
			echo "<meta http-equiv=\"refresh\" content=\"0; url=bobot_gejala.php\">";
		}
	} else {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=bobot_gagal.php?page=8&kode_penyakit=$kode_penyakit&act=gagal\">";;
	}
}
?>