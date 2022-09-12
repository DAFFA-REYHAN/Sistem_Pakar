<?php
    session_start();
    require_once('otentifikasi.php');
    include("koneksi_db.php");

    $kode_gejala = $_GET['kode_gejala'];
    $qry = mysqli_query($conn, "DELETE FROM gejala WHERE kode_gejala='$kode_gejala'");
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['sukses'] = "Gejala Berhasil Dihapus";
    }else {
        $_SESSION['gagal'] = "Gejala Gagal Dihapus";
    }
    header("location: index_pakar.php?act=daftar_gejala");
?>