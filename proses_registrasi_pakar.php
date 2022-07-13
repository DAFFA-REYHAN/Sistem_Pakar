<?php
session_start();

if (isset($_POST['tombol'])) {
	if (($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))) {
		// Insert you code for processing the form here
		include "koneksi_db.php";
		function clean($str)
		{
			$str = @trim($str);
			if (get_magic_quotes_gpc()) {
				$str = stripslashes($str);
			}
			return mysqli_real_escape_string($str);
		}

		//Sanitize the POST values
		$username = clean($_POST['username']);
		$password = $_POST['password'];
		$pertanyaan = clean($_POST['pertanyaan']);
		$jawaban = clean($_POST['jawaban']);


		//If there are input validations, redirect back to the registration form
		if ($errflag) {
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			session_write_close();
			header("location: pakar_index.php");
			exit();
		}

		//Create INSERT query
		$qry = "INSERT INTO data_pakar
			VALUES('$username', '" . md5($_POST['password']) . "', '$pertanyaan', '" . md5($_POST['jawaban']) . "')";

		$result = mysqli_query($conn, $qry);



		//Check whether the query was successful or not
		if ($result) {
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=berhasil\">";
			exit();
		} else {
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=gagal2\">";
		}
	} else {
		// Insert your code for showing an error message here
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=gagal\">";
	}
} else {
}
