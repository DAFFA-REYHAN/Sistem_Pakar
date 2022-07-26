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
	

	<div class="container my-5 py-5">
		<h4 class="text-center mb-5">Bantuan</h4>
		<div class="row">
			<div class="col-8 offset-2">
				<ol>
					<li class="mb-3">
						Silahkan melakukan <a href="daftar.php"><b>PENDAFTARAN</b></a> terlebih dahulu apabila user belum memiliki <b>NAMA PENGGUNA</b> dan <b>KATA KUNCI.</b>
					</li>
					<li class="mb-3">
						Setelah melakukan proses <b>PENDAFTARAN</b>, maka user dapat langsung melakukan proses<strong> LOG MASUK</strong>.
					</li>
					<li class="mb-3">
						Apabila user lupa dengan <b>KATA KUNCI</b> maka user dapat memilih menu <a href="lupa_pw.php"><b>LUPA KATA KUNCI</b>.</a>
					</li>
					<li class="mb-3">
						Kemudian user dapat langsung melakukan proses<b> KONSULTASI</b>.
					</li>
				</ol>
			</div>
		</div>
		
		
	</div>

<?php include('partials/footer.php') ?>
	



	
