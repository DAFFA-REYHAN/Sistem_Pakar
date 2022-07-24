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

<!DOCTYPE html>
<html>
<link rel="icon" type="image/gif" href="images/gun.gif">

<head>
	<meta charset="utf-8">
	<title>Sistem Pakar Kejiwaan</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<?php 
	include("koneksi_db.php"); ?>
	
	<style>
		/* .rounded-navbar{
			border-radius: 20px 20px 0px 0px!important;
		}, */
		.active{
			background-color: #f5f5f5;
			border-radius: 30rem!important;
		}
		.jumbotron{
			background-image: url('gambar/gambar-jumbotron2.jpg');
			background-size: cover;
			background-position: center;
			height: 500px;
		}
		.text-jumbotron{
			color: white;
		}
		.text-jumbotron .text-large{
			font-size: 60px;
		}
		.about{
			background-color: #f1f4f8!important;
		}
	</style>

</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 py-3 shadow-sm">
		<div class="container">
			<b><?php echo"$tglsekarang";?></b>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-4 active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="informasi.php">Informasi</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="lokasi_display.php">Lokasi</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="Artikel_display.php">Artikel</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="bantuan.php">Bantuan</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item mx-4">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="jumbotron text-center text-jumbotron">
		<h2 class="mt-5">Website Sistem Pakar</h2>
		<p class="text-large">DIAGNOSIS PENYAKIT RAHIM</p>
		<h5>Daftarkan diri anda segera untuk menggunakan fasilitas diagnosis gangguan kejiwaan.</h5>
		<div>
			<a class="btn btn-outline-warning text-warning rounded-pill px-4 mt-4" href="daftar.php">Masuk</a>
			<a class="btn btn-warning text-black rounded-pill px-4 mt-4" href="daftar.php">Daftar</a>
		</div>
	</div>
	<!-- <div class="about py-5">
		<img src="gambar/stmik-logo.png" alt="" height="200">
	</div> -->
	<div class="container mt-5">

		<div class="row">
			<div class="col-md-4 ">
				<div class="card shadow-sm">
  					<div class="card-body">
						<form class="form-horizontal" role="form" method="post" action="login.php">
							<div class="form-group">
								<label for="username">User</label>
								<input type="text" class="form-control" name="username" placeholder="Masukkan username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Masukkan password">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-warning rounded-pill">Masuk</button>
								<a href="lupa_pw.php" class="btn btn-link" role="button">Lupa Password ?</a>
							</div>
						</form>
					</div>
				
					<div class="card-footer">
						<ul class="nav nav-list">
							<li class="nav-header">Website Kejiwaan Lainnya :</li>
							<li class="active"><a href="http://www.pdskji.org/home">http://www.pdskji.org/home</a></li>
							<li><a href="http://www.lahargokembaren.com/">http://www.lahargokembaren.com/</a></li>
							<li><a href="http://www.budiannakeliat.com/">http://www.budiannakeliat.com/</a></li>
						</ul>
					</div>
				</div>	
			</div>

			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-body">

						<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
						<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
						<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
						<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
						<?php include("koneksi_db.php");
						include("paging.php");
						$act = isset($_GET['act']);
						?>



						<table table class="table table-bordered" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" id="pag">

							<?php


							$p = new Paging;
							$batas = 4;
							$posisi = $p->cariPosisi($batas);

							$no = 0;
							$qlog = mysqli_query($conn, "SELECT * FROM artikel ORDER BY kd_artikel Desc LIMIT $posisi,$batas");
							
							while ($data = mysqli_fetch_array($qlog)) {
								$no++;
							?>
								<tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
											else echo "isitabelgenap"; ?>">

									<div class="panel panel-info">
										<div class="panel-footer">
											<div class="row">


												<div class="col-md-6">

													<?php echo "<img src='gambarartikel/" . $data['gambar'] . "' width='300px' height='300px'/>"; ?>
												</div>
												<div class="col-md-4">
													<div class="caption">
														<h3><?php echo $data['judul']; ?></h3>
														<p><?php echo $data['abstrak']; ?></p>
														<p><a href="detailartikel_display.php?page=4&act=detailartikel&kd_artikel=<?php echo $data['kd_artikel']; ?>" class="btn btn-primary" role="button">Lanjutkan membaca</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								
								</tr>
								<?php } ?>
						</table>

						<?php
						$jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM artikel"));
						$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
						echo "<center>$linkHalaman</center>";
						?>




					</div>
				</div>



			</div>
		</div>
	</div>


	



	<div class="row">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>
						Design by Jesreel Surbakti | jeareel22@gmail.com | © Copyright 2015
					</center>
				</div>
			</div>
		</div>
	</div>




	<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
	<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.js"></script> -->
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>

</html>