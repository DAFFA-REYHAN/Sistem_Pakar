<?php
	session_start();

	include("koneksi_db.php");

	if (isset($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
	} else {
		$page = '1';
	}
?>

<!DOCTYPE html>
<html>
	<link rel="icon" type="image/gif" href="images/gun.gif">
	<head>
		<meta charset="utf-8">
		<style>
			.card {
				border-radius: 50px;
				background: #e0e0e0;
				box-shadow: 10px 10px 40px #c7c7c7,
					-10px -10px 40px #f9f9f9;
			}

			.link {
				text-decoration: none;
				color: black
			}

			.link:hover {
				text-decoration: none;
			}

			.list-group-item:hover {
				text-decoration: none;
				color: white;
				font-weight: bold;
				background-color: #d0d0C1;
				transition: background-color .5s ease-out;
			}

			.list-link:hover {
				text-decoration: none;
				border-radius: 30px;
				background-color: #e9eceb !important;
				transition: background-color .3s ease-out;
			}

			.link-web:hover {
				text-decoration: none;
				color: green;
				transition: color .3s ease-out;
			}
		</style>
	</head>

	<body>
		<?php include('partials/header.php') ?>
		<?php include('partials/navbar.php') ?>
		<?php include('partials/login_modal.php') ?>
		<?php include('partials/daftar_modal.php') ?>
		<!-- Start Ambil data -->
		<?php
			$kd_artikel = $_GET['kd_artikel'];
			$qry = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel='$kd_artikel'");
			$data = mysqli_fetch_array($qry);
		?>
		<!-- End Ambil Data -->

		<div class="row mx-0">
			<div class="col-8 my-4" align="justify">
				<div class="card w-100">
					<p class="mt-3 ml-3 font-italic ">Penulis : <?= $data['penulis'] ?></p>
					<div class="card-body px-5 pb-5">
						<h3 class="text-center mb-3"><?= $data['judul'] ?></h3>
						<div class="image text-center mb-5"><img src="gambarartikel/<?= $data['gambar'] ?>" alt="Gambar Artikel <?= $data['judul'] ?>" width="400px" height="300px"></div>
						<?= $data['isi'] ?>
					</div>
				</div>
			</div>
			<div class="col-4 mt-4">
				<!-- CARD ARTIKEL LAINNYA -->
				<div class="card w-100">
					<div class="card-header text-white font-weight-bolder" style="background-color: #23517F;">
						Baca Artikel Lainnya :
					</div>
					<?php
						$query = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel<>'$kd_artikel' LIMIT 10");
					?>
					<ul class="list-group list-group-flush">
						<?php while ($row = mysqli_fetch_array($query)) : ?>
							<a class="link" href="detailartikel_display.php?kd_artikel=<?php echo $row['kd_artikel']; ?>" href="#">
								<li class="list-group-item text-center"><?= $row['judul'] ?>
								</li>
							</a>
						<?php endwhile; ?>
					</ul>
				</div>
				<!-- END ARTIKEL LAINNYA -->
				<br><br>
				<div class="card w-100">
					<ul class="nav flex-column py-3 px-3">
						<li class="nav-header">
							<a class="nav-link disabled font-weight-bold" href="#">Website Sistem Reproduksi Wanita Lainnya :</a>
						</li>
						<li class="list-link nav-item ml-3">
							<a class="link-web nav-link" href="https://herminahospitals.com/id/specialities/kandungan-obgyn" target="_blank">https://herminahospitals.com/id/</a>
						</li>
						<li class="list-link nav-item ml-3">
							<a class="link-web nav-link" href="https://rscm.co.id/index.php?XP_webview_menu=0&pageid=72" target="_blank">https://rscm.co.id/kandungan/</a>
						</li>
						<li class="list-link nav-item ml-3">
							<a class="link-web nav-link" href="https://www.rspondokindah.co.id/id/center-of-excellence/klinik-kebidanan-dan-kandungan" target="_blank">https://www.rspondokindah.co.id/id/</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include('partials/footer.php') ?>

		<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>