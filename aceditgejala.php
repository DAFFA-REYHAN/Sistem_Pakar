<?php
session_start();
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_gejala = $_POST['kode_gejala'];
$nama_gejala = $_POST['nama_gejala'];

$qry = mysqli_query($conn, "UPDATE gejala SET nama_gejala='$nama_gejala' WHERE kode_gejala='$kode_gejala'");

if (mysqli_affected_rows($conn) > 0) {
    $_SESSION['sukses'] = "berhasil merubah gejala";
}else {
    $_SESSION['gagal'] = "gagal merubah gejala";
}
header("location: index_pakar.php?act=daftar_gejala");

?>
