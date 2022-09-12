<?php
	session_start();

	if (isset($_POST['tombol']) && isset($_POST['g-recaptcha-response'])) {

		//Include database connection details
		include "koneksi_db.php";

		//Function to sanitize values received from the form. Prevents SQL injection
		function clean($str)
		{
			$str = @trim($str);
			if (get_magic_quotes_gpc()) {
				$str = stripslashes($str);
			}
			return mysqli_real_escape_string($GLOBALS['conn'], $str);
		}

		//Sanitize the POST values
		$username = clean($_POST['username']);
		$password = $_POST['password'];
		$nama_user = clean($_POST['nama_user']);
		$usia = clean($_POST['usia']);
		$jenis_kelamin = clean($_POST['jenis_kelamin']);
		$alamat = clean($_POST['alamat']);
		$pertanyaan = clean($_POST['pertanyaan']);
		$jawaban = clean($_POST['jawaban']);


		//Create INSERT query
		$qry = "INSERT INTO data_user VALUES('$username', '" . md5($_POST['password']) . "',  '$nama_user', '$usia', '$jenis_kelamin', '$alamat','$pertanyaan', '" . md5($_POST['jawaban']) . "','user')";
		$result = mysqli_query($conn, $qry);

		//Check whether the query was successful or not
		if ($result) {
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
			$_SESSION['sukses'] = "Berhasil Mendaftar";
			exit();
		} else {
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
			$_SESSION['gagal'] = "Gagal Mendaftar";
			exit();
		}
	} else {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
		$_SESSION['gagal'] = "Gagal Mendaftar";
		exit();
	}
?>