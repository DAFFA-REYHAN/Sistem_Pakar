<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_gejala = $_POST['kode_gejala'];
$nama_gejala = $_POST['nama_gejala'];

$qry = mysqli_query($conn, "UPDATE gejala SET nama_gejala='$nama_gejala' WHERE kode_gejala='$kode_gejala'");

header("location: index_pakar.php");

?>
