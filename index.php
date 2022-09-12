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
<?php include('partials/daftar_modal.php') ?>

<div class="jumbotron text-left text-jumbotron mb-0">
	<div class="container">
		<h2 class="mt-5">Website Sistem Pakar</h2>
		<p class="text-large">DIAGNOSIS PENYAKIT REPRODUKSI WANITA</p>
		<h5>Daftarkan diri anda segera untuk menggunakan fasilitas diagnosis ini</h5>
		<div>
			<a class="btn btn-warning text-black px-4 mt-4" data-toggle="modal" data-target="#RegisterModal">Daftar</a>
		</div>
	</div>
</div>
<div class="about py-5">
	<div class="container text-center">
		<div class="row">
			<div class="col">
				<span class="material-symbols-outlined">touch_app</span>
				<h6>Mudah</h6>
				<p>Mudah dalam melakukan diagnosis penyakit reproduksi wanita</p>
			</div>
			<div class="col">
				<span class="material-symbols-outlined">verified</span>
				<h6>Akurasi Tinggi</h6>
				<p>Menggunakan kombinasi algoritma forward chaining dengan fuzzy mamdani</p>
			</div>
			<div class="col">
				<span class="material-symbols-outlined">psychology</span>
				<h6>Professional</h6>
				<p>Data yang ada berdasarkan hasil riset dengan para Professional</p>
			</div>
		</div>
	</div>
</div>
<?php include('artikel_show.php') ?>

<?php include('partials/footer.php') ?>