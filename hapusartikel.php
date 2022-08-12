<?php
session_start();
require_once('otentifikasi.php');
include("koneksi_db.php");

$kd_artikel = $_GET['kd_artikel'];

$cek = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel = '$kd_artikel'");
$artikel = mysqli_fetch_array($cek);
unlink('gambarartikel/'.$artikel['gambar']);

$qry = mysqli_query($conn, "DELETE FROM artikel WHERE kd_artikel='$kd_artikel'");

if (mysqli_affected_rows($conn) > 0) {
    $_SESSION['sukses'] = "berhasil menghapus artikel";
}else {
    $_SESSION['gagal'] = "gagal menghapus artikel";
}
header("location: index_pakar.php?act=artikel");

?>
