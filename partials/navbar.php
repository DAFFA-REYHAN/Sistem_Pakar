<?php
	$page = $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>
<?php include('partials/login_modal.php') ?>
<?php include('partials/daftar_modal.php') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 py-3 shadow-sm sticky-top">
	<div class="container">
	Sistem Pakar Diagnosa Penyakit Sistem Reproduksi Wanita
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mx-2 px-2 <?= $page == "index.php" ? "active active-navbar" : "" ?>">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item mx-2 px-2 <?= $page == "artikel_display.php" ? "active active-navbar" : "" ?>">
					<a class="nav-link" href="artikel_display.php">Artikel</a>
				</li>
				<li class="nav-item mx-2 px-2 <?= $page == "bantuan.php" ? "active active-navbar" : "" ?>">
					<a class="nav-link" href="bantuan.php">Bantuan</a>
				</li>
				<li class="nav-item mx-2 px-2 <?= $page == "about.php" ? "active active-navbar" : "" ?>">
					<a class="nav-link" href="about.php">Tentang Kami</a>
				</li>
				<?php
					if (!isset($_SESSION['SESS_USERNAME'])) {
				?>
						<li class="nav-item ml-2 px-2">
							<a class="nav-link btn btn-outline-primary px-3" data-toggle="modal" data-target="#LoginModal">Masuk</a>
						</li>
						<li class="nav-item mr-2 px-2">
							<a class="nav-link btn btn-primary text-white px-3" data-toggle="modal" data-target="#RegisterModal">Daftar</a>
						</li>
				<?php
					} else {
				?>
						<li class="nav-item ml-2 px-2">
							<a class=" nav-link btn btn-outline-primary px-3" href="index_<?= $_SESSION['hak_akses'] ?>.php">Dashboard</a>
						</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
</nav>