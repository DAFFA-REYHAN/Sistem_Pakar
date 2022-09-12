<?php
// cek  session
session_start();

if (isset($_SESSION['user'])) {
	$username = $_SESSION['SESS_USERNAME'];
} elseif (isset($_SESSION['pakar'])) {
	header("location:index_pakar.php");
} else {
	header("location:index.php");
}

if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = '1';
}

function clean($str)
{
	$str = @trim($str);
	if (get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
	return mysqli_real_escape_string($GLOBALS['conn'], $str);
}
?>

<?php include('koneksi_db.php') ?>
<?php include('library.php') ?>
<?php include('partials/header.php') ?>
<?php include('partials/navbar.php') ?>

<!-- <style>
	.active-side {
		background-color: #23517f !important;
		color: white !important;
	}
</style> -->

<div class="py-5" style="background-color: #23517f!important;">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="list-group" id="list-tab" role="tablist">
					<li class="list-group-item card-header">Menu User</li>
					<a class="list-group-item list-group-item-action" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">
						<img src="gambar/iconprofile.png" width="48" height="48" />Profil
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "ubah_password" ? "active" : "" ?>" id="list-password-list" data-toggle="list" href="#list-password" role="tab" aria-controls="password">
						<img src="gambar/ubahpassword.png" width="48" height="48" />Ubah Password
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "diagnosa" ? "active" : "" ?>" id="list-diagnosa-list" data-toggle="list" href="#list-diagnosa" role="tab" aria-controls="diagnosa">
						<img src="gambar/diagnosa.png" width="48" height="48" />Diagnosa
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "hasil_diagnosa" ? "active" : "" ?>" id="list-hasildiagnosa-list" data-toggle="list" href="#list-hasildiagnosa" role="tab" aria-controls="hasildiagnosa">
						<img src="gambar/lihathasil.png" width="48" height="48" />Hasil Diagnosa
					</a>
					<a class="list-group-item list-group-item-action" href="logout.php">
						<img src="gambar/keluar.png" width="48" height="48" />Keluar
					</a>
				</div>
			</div>
			<div class="col-9">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade <?= !isset($_GET['act']) ? "active show" : "" ?>" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
						<div class="card">
							<div class="card-header">
								Profil
							</div>
							<div class="card-body">
								<?php include "profile_user.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "ubah_password" ? "active show" : "" ?>" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
						<div class="card">
							<div class="card-header">
								Ubah Password
							</div>
							<div class="card-body">
								<?php include "ubahpw_user.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "diagnosa" ? "active show" : "" ?>" id="list-diagnosa" role="tabpanel" aria-labelledby="list-diagnosa-list">
						<div class="card">
							<div class="card-header">
								Diagnosa
							</div>
							<div class="card-body">
								<?php include "diagnosa_user.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "hasil_diagnosa" ? "active show" : "" ?>" id="list-hasildiagnosa" role="tabpanel" aria-labelledby="list-hasildiagnosa-list">
						<div class="card">
							<div class="card-header">
								Hasil Diagnosa
							</div>
							<div class="card-body">
								<?php include "hasil_diagnosa_user.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade  <?= $_GET['act'] == "hasil" ? "active show" : "" ?>" id="list-hasil" role="tabpanel" aria-labelledby="list-hasil-list">
						<div class="card">
							<div class="card-header">
								Hasil Diagnosa
							</div>
							<div class="card-body">
								<?php include "hasil.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade  <?= $_GET['act'] == "detail" ? "active show" : "" ?>" id="list-hasil" role="tabpanel" aria-labelledby="list-hasil-list">
						<div class="card">
							<div class="card-header">
							</div>
							<div class="card-body">
								<?php include "user_detail.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade  <?= $_GET['act'] == "hasil_kosong" ? "active show" : "" ?>" id="list-hasil" role="tabpanel" aria-labelledby="list-hasil-list">
						<div class="card">
							<div class="card-header">
								Hasil
							</div>
							<div class="card-body">
								<?php include "hasil0.php" ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>

<script type="text/javascript">
	var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9", {
		minChars: 6,
		validateOn: ["blur"]
	});

	var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {
		minChars: 5,
		validateOn: ["blur"]
	});
	var sprytextfield4912 = new Spry.Widget.ValidationTextField("sprytextfield4912", "nama", {
		minChars: 2,
		validateOn: ["blur"]
	});
	var sprytextfield592 = new Spry.Widget.ValidationTextField("sprytextfield592", "integer", {
		validateOn: ["blur"]
	});
	var sprytextfield696 = new Spry.Widget.ValidationTextField("sprytextfield696", "alamat", {
		minChars: 4,
		validateOn: ["blur"]
	});
	var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779", "none", {
		minChars: 4,
		maxChars: 4,
		validateOn: ["blur"]
	});
	var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889", "nama", {
		validateOn: ["blur"]
	});
	var validsel = new Spry.Widget.ValidationSelect("validsel", {
		validateOn: ["blur"]
	});
</script>