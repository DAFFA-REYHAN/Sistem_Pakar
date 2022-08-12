<?php
session_start();

require_once('otentifikasi.php');
include("koneksi_db.php");
if (isset($_REQUEST['kode_penyakit'])) {
	$kode_penyakit = $_REQUEST['kode_penyakit'];
} else {
	$kode_penyakit = '';
}


$kode_penyakit = $_POST['kode_penyakit'];
$cekgejala = $_POST['cekgejala'];

$jum = count($cekgejala);
if ($jum == 0) {
	$_SESSION['gagal'] = "gagal menambah gejala | gejala tidak boleh kosong";
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=relasi\">";
} else {
	$qpil = mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit'");
	if (mysqli_num_rows($qpil) > 1) {
		mysqli_query($conn, "DELETE FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit'");
	}
	$val = "";
	for ($i = 0; $i < $jum; ++$i) {
		
		$val .= "('$kode_penyakit', '$cekgejala[$i]', 0), "; 
	}
	$val = rtrim($val,', ');

	$qry = mysqli_query($conn, "INSERT INTO relasi_penyakit_gejala(kode_penyakit, kode_gejala, bobot) VALUES $val");
	
	if (mysqli_affected_rows($conn) > 0) {
		$_SESSION['sukses'] = "berhasil menambah gejala";
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=bobot&kode_penyakit=$kode_penyakit\">";
	}else {
		$_SESSION['gagal'] = "gagal menambah gejala";
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=relasi\">";
	}
}
?>