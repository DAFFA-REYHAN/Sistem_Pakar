<?php
	session_start();
	require_once('otentifikasi.php');
	include "tanggal.php";

	include("koneksi_db.php");

	$kd_artikel = $_POST['kd_artikel'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$abstrak = $_POST['abstrak'];
	$isi = $_POST['isi'];
	$fileName = $_FILES['gambar']['name'];

	if ($fileName) {
		$gambarCek = mysqli_query($conn, "SELECT * FROM artikel WHERE gambar = '".$fileName."'");
		$rowGambar = mysqli_num_rows($gambarCek);

		if ($rowGambar > 0) {
			$fileName = "(".strval($rowGambar+1).")".$fileName;
		}

		$qry = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel = '$kd_artikel'");
		$artikel = mysqli_fetch_array($qry);
		unlink('gambarartikel/'.$artikel['gambar']);
		mysqli_query($conn, "UPDATE artikel SET judul='$judul', penulis='$penulis', abstrak='$abstrak', isi='$isi', gambar='$fileName' WHERE kd_artikel='$kd_artikel'");
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambarartikel/" . $fileName);
	}else {
		mysqli_query($conn, "UPDATE artikel SET judul='$judul', penulis='$penulis', abstrak='$abstrak', isi='$isi' WHERE kd_artikel='$kd_artikel'");
	}
	if (mysqli_affected_rows($conn) > 0) {
		$_SESSION['sukses'] = "berhasil merubah artikel";
	}else {
		$_SESSION['gagal'] = "gagal merubah artikel";
	}
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index_pakar.php?act=artikel\">";
						

?>
