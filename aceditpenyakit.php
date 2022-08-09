<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_penyakit = $_POST['kode_penyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$definisi = $_POST['definisi'];
$pengobatan = $_POST['pengobatan'];
$pencegahan = $_POST['pencegahan'];

$qry = mysqli_query($conn, "UPDATE penyakit SET nama_penyakit='$nama_penyakit', definisi='$definisi', pengobatan='$pengobatan' , pencegahan='$pencegahan' WHERE kode_penyakit='$kode_penyakit'");

header("location: index_pakar.php");

?>
