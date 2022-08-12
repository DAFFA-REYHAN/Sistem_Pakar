<?php
session_start();
require_once('otentifikasi.php');

include("koneksi_db.php");

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
		$qryr = mysqli_query($conn, "UPDATE relasi_penyakit_gejala SET bobot='$bobot[$i]' WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$kode_gejala[$i]'");
	}
	$_SESSION['sukses'] = "sukses merubah bobot";
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=bobot\">";;
} else {
	$_SESSION['gagal'] = "gagal merubah bobot | bobot kurang dari 100%";
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=bobot\">";;
}

?>