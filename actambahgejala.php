<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_gejala = $_POST['kode_gejala'];
$nama_gejala = $_POST['nama_gejala'];

$cek = mysqli_query($conn, "SELECT * FROM gejala");
$jumlah = mysqli_num_rows($cek);
$id = $jumlah + 1;
$qry = mysqli_query($conn, "INSERT INTO gejala  (kode_gejala, nama_gejala) VALUES  ('$kode_gejala','$nama_gejala')");
if (mysqli_num_rows($qry) > 0) {
    $_SESSION['sukses'] = "berhasil menambah gejala";
}else {
    $_SESSION['gagal'] = "gagal menambah gejala";
}
header("location: index_pakar.php?act=daftar_gejala");

?>
