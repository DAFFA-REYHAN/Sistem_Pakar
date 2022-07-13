<?php
$act = isset($_GET['act']);
if ($act == "acubah") {

	$username = $_GET['u'];
	$status   = $_GET['s'];
	$password = $_POST['password'];

	if ($status == 'user') {

		$qry = mysqli_query($conn, "UPDATE data_user SET password='" . md5($_POST['password']) . "' WHERE username='$username'");
	} else {
		$qry = mysqli_query($conn, "UPDATE data_pakar SET password='" . md5($_POST['password']) . "' WHERE username='$username'");
	}

	if ($qry) {
		echo "<berhasil.php\">";;
	} else {
		echo "gagal";
	}
}
