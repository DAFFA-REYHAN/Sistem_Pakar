<?php
session_start();
unset($_SESSION['SESS_USERNAME']);

include "tanggal.php";

if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = '1';
}
?>
<?php 
	include("koneksi_db.php"); ?>


<?php include('partials/header.php') ?>
<?php include('partials/navbar.php') ?>
	

	<div class="jumbotron text-left text-jumbotron mb-0">
		<div class="container">
			<h2 class="mt-5">Website Sistem Pakar</h2>
			<p class="text-large">DIAGNOSIS PENYAKIT REPRODUKSI WANITA</p>
			<h5>Daftarkan diri anda segera untuk menggunakan fasilitas diagnosis ini</h5>
			<div>
				<a class="btn btn-warning text-black px-4 mt-4" href="daftar.php">Daftar</a>
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
	<div class="container mt-5">
		<h4 class="text-center mb-5">Artikel</h4>
		<?php 
			include("paging.php");
			$act = isset($_GET['act']);

			$p = new Paging;
			$batas = 4;
			$posisi = $p->cariPosisi($batas);

			$no = 0;
			$qlog = mysqli_query($conn, "SELECT * FROM artikel ORDER BY kd_artikel Desc LIMIT $posisi,$batas");

			while ($data = mysqli_fetch_array($qlog)) {
				$no++;
		?>
		<div class="card mb-3 mx-auto" style="max-width: 940px;">
			<div class="row no-gutters">
				<div class="col-md-5">
					<img src="<?php echo 'gambarartikel/' . $data['gambar'];  ?>" alt="..." height="200px" width="350px">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<h5 class="card-title"><?php echo $data['judul']; ?></h5>
						<p class="card-text"><?php echo $data['abstrak']; ?></p>
						<a href="detailartikel_display.php?page=4&act=detailartikel&kd_artikel=<?php echo $data['kd_artikel']; ?>" class="btn btn-primary" role="button">Lanjutkan membaca</a>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php
		$jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM artikel"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
		echo "<center>$linkHalaman</center>";
		?>
	</div>

<?php include('partials/footer.php') ?>
	



	