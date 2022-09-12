<?php 
	session_start();
	require_once('otentifikasi.php');
	include("koneksi_db.php");
	
	$kd_artikel = $_POST['kd_artikel'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$abstrak = $_POST['abstrak'];
	$isi = $_POST['isi'];
	$fileName = $_FILES['gambar']['name'];
	$cek = mysqli_query($conn, "SELECT * FROM artikel");
	$jumlah = mysqli_num_rows($cek);
	$id = $jumlah + 1;
	$gambarCek = mysqli_query($conn, "SELECT * FROM artikel WHERE gambar = '".$fileName."'");
	$rowGambar = mysqli_num_rows($gambarCek);
	if ($rowGambar > 0) {
		$fileName = "(".strval($rowGambar+1).")".$fileName;
	}
	$qry = mysqli_query($conn, "INSERT INTO artikel  (kd_artikel, judul, penulis, abstrak, isi, gambar) VALUES  ('$kd_artikel','$judul','$penulis','$abstrak','$isi','$fileName')");
	move_uploaded_file($_FILES['gambar']['tmp_name'], "gambarartikel/" . $fileName);
	if (mysqli_affected_rows($conn) > 0) {
		$_SESSION['sukses'] = "Artikel Berhasil Ditambah";
	}else {
		$_SESSION['gagal'] = "Artikel Gagal Ditambah";
	}
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=artikel\">";
?>