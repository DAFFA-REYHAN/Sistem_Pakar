<?php
require_once('otentifikasi.php');
include("koneksi_db.php");

$kode_penyakit = $_POST['kode_penyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$definisi = $_POST['definisi'];
$pengobatan = $_POST['pengobatan'];
$pencegahan = $_POST['pencegahan'];
$cek = mysqli_query($conn, "SELECT * FROM penyakit");
$jumlah = mysqli_num_rows($cek);
$id = $jumlah + 1;
$qry = mysqli_query($conn, "INSERT INTO penyakit  (kode_penyakit, nama_penyakit, definisi, pengobatan, pencegahan) VALUES  ('$kode_penyakit','$nama_penyakit','$definisi','$pengobatan','$pencegahan')");
if (mysqli_num_rows($qry) > 0) {
    $_SESSION['sukses'] = "berhasil menambah penyakit";
}else {
    $_SESSION['gagal'] = "gagal menambah penyakit";
}
header("location: index_pakar.php?act=daftar_penyakit");

?>
