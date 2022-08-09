<?php
session_start();

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
	



	