<?php
	// cek  session
	session_start();
	// var_dump($_SESSION); die;

	if (isset($_SESSION['pakar'])) {
		$username = $_SESSION['SESS_USERNAME'];
	} elseif (isset($_SESSION['user'])) {
		header("location:index_user.php");
	} elseif (isset($_SESSION['admin'])) {
		header("location:index_admin.php");
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

<div class=" py-5" style="background-color: #23517f!important;">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="list-group" id="list-tab" role="tablist">
					<li class="list-group-item">Menu Pakar</li>
					<a class="list-group-item list-group-item-action" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">
						<img src="gambar/iconprofile.png" width="48" height="48" />Profil
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "ubah_password" ? "active" : "" ?>" id="list-password-list" data-toggle="list" href="#list-password" role="tab" aria-controls="password">
						<img src="gambar/ubahpassword.png" width="48" height="48" />Ubah Password
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "daftar_penyakit" ? "active" : "" ?>" id="daftar-penyakit-list" data-toggle="list" href="#daftar-penyakit" role="tab" aria-controls="diagnosa">
						<img src="gambar/daftar_penyakit.png" width="48" height="48" />Daftar Penyakit
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "daftar_gejala" ? "active" : "" ?>" id="daftar-gejala-list" data-toggle="list" href="#daftar-gejala" role="tab" aria-controls="diagnosa">
						<img src="gambar/daftar_gejala.png" width="48" height="48" />Daftar Gejala
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "relasi" ? "active" : "" ?>" id="daftar-relasi-list" data-toggle="list" href="#daftar-relasi" role="tab" aria-controls="diagnosa">
						<img src="gambar/relasi.png" width="48" height="48" />Relasi
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "bobot" ? "active" : "" ?>" id="list-bobot-list" data-toggle="list" href="#list-bobot" role="tab" aria-controls="bobot">
						<img src="gambar/timbangan.png" width="48" height="48" />Bobot Gejala
					</a>
					<a class="list-group-item list-group-item-action <?= $_GET['act'] == "artikel" ? "active" : "" ?>" id="list-artikel-list" data-toggle="list" href="#list-artikel" role="tab" aria-controls="artikel">
						<img src="gambar/artikel.png" width="48" height="48" />Artikel
					</a>
					<a class="list-group-item list-group-item-action" href="logout.php">
						<img src="gambar/keluar.png" width="48" height="48" />Keluar
					</a>
				</div>
			</div>
			<div class="col-9">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade  <?= !isset($_GET['act']) ? "active show" : "" ?>" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
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
					<div class="tab-pane fade <?= $_GET['act'] == "daftar_penyakit" ? "active show" : "" ?>" id="daftar-penyakit" role="tabpanel" aria-labelledby="daftar-penyakit-list">
						<div class="card">
							<div class="card-header">
								Daftar Penyakit
							</div>
							<div class="card-body">
								<?php include "daftar_penyakit.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "daftar_gejala" ? "active show" : "" ?>" id="daftar-gejala" role="tabpanel" aria-labelledby="daftar-gejala-list">
						<div class="card">
							<div class="card-header">
								Daftar Gejala
							</div>
							<div class="card-body">
								<?php include "daftar_gejala.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "relasi" ? "active show" : "" ?>" id="daftar-relasi" role="tabpanel" aria-labelledby="daftar-relasi-list">
						<div class="card">
							<div class="card-header">
								Relasi
							</div>
							<div class="card-body">
								<?php include "relasi.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "bobot" ? "active show" : "" ?>" id="list-bobot" role="tabpanel" aria-labelledby="list-bobot-list">
						<div class="card">
							<div class="card-header">
								Bobot Gejala
							</div>
							<div class="card-body">
								<?php include "bobot_gejala.php" ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade <?= $_GET['act'] == "artikel" ? "active show" : "" ?>" id="list-artikel" role="tabpanel" aria-labelledby="list-artikel-list">
						<div class="card">
							<div class="card-header">
							</div>
							<div class="card-body">
							<?php include "artikel.php" 
								?>
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