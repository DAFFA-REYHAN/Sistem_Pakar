<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_penyakit = $_GET['kode_penyakit'];

$qry = mysqli_query($conn, "DELETE FROM penyakit WHERE kode_penyakit='$kode_penyakit'");

header("location: index_pakar.php");

?>
