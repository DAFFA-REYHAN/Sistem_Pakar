<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_penyakit = $_GET['kode_penyakit'];

$qry = mysqli_query($conn, "DELETE FROM penyakit WHERE kode_penyakit='$kode_penyakit'");

if (mysqli_num_rows($qry) > 0) {
    $_SESSION['sukses'] = "berhasil menghapus penyakit";
}else {
    $_SESSION['gagal'] = "gagal menghapus penyakit";
}
header("location: index_pakar.php?act=daftar_penyakit");

?>
