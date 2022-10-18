<?php
	//Start session
	session_start();

	//Include database connection details
	require_once('koneksi_db.php');

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

	//Create query
	$qry = "SELECT * FROM data_user WHERE username='$username' AND password='" . md5($_POST['password']) . "'";
	$result = mysqli_query($conn, $qry);

	//Check whether the query was successful or not
	if (mysqli_num_rows($result) == 1) {
		//Login Successful
		$member = mysqli_fetch_assoc($result);
		$_SESSION['SESS_USERNAME'] = $member['username'];
		$hak_akses = $member['hak_akses'];
		if ($hak_akses == 'pakar') {
			$_SESSION['pakar'] = true;
			$_SESSION['hak_akses'] = "pakar";
			header("location: index_pakar.php");
			exit();
		} else if ($hak_akses == 'user') {
			$_SESSION['user'] = true;
			$_SESSION['hak_akses'] = "user";
			header("location: index_user.php");
			exit();
		} else if ($hak_akses == 'admin') {
			$_SESSION['admin'] = true;
			$_SESSION['hak_akses'] = "admin";
			header("location: index_admin.php");
			exit();
		}
	} else {
		$_SESSION['gagal'] = "Username atau password salah!";
		header("location: index.php");
		exit();
	}
?>