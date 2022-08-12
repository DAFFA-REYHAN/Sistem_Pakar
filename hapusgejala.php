<?php
session_start();
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_gejala = $_GET['kode_gejala'];

$qry = mysqli_query($conn, "DELETE FROM gejala WHERE kode_gejala='$kode_gejala'");
if (mysqli_affected_rows($conn) > 0) {
    $_SESSION['sukses'] = "berhasil menghapus gejala";
}else {
    $_SESSION['gagal'] = "gagal menghapus gejala";
}
header("location: index_pakar.php");

?>
