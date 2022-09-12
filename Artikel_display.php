<?php
	session_start();

	if (isset($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
	} else {
		$page = '1';
	}
?>

<?php include('koneksi_db.php') ?>
<?php include('partials/header.php') ?>
<?php include('partials/navbar.php') ?>
<?php include('partials/login_modal.php') ?>
<?php include('partials/daftar_modal.php') ?>

<?php include('artikel_show.php') ?>

<?php include('partials/footer.php') ?>