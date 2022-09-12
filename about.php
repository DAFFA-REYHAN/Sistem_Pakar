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

<div class="container my-5 py-5">
	<h4 class="text-center mb-5">Tentang Kami</h4>
	<div class="row">
		<div class="offset-2 col-8">
			<p class="text-justify">Aplikasi Website Sistem Pakar Diagnosa Penyakit pada Sistem Reproduksi Wanita Menggunakan Metode Forward Chaining dan Fuzzy Mamdani dibuat dengan dana hibah Penelitian Tesis Magister (PTM) dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia. <br><br>
				Aplikasi ini dibuat dengan tujuan untuk membantu para wanita melakukan diagnosa awal penyakit yang diderita berdasarkan gejala-gejala yang dipilih, data penyakit serta gejala penyakit didapatkan melalui wawancara dengan dokter spesialis obstetri dan ginekologi. Aplikasi ini juga menyediakan artikel dan informasi terkait kesehatan sistem reproduksi wanita.
			</p>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>