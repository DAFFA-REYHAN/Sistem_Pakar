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
<?php include('partials/login_modal.php') ?>
<?php include('partials/daftar_modal.php') ?>


<div class="container my-5 py-5">
	<h4 class="text-center mb-5">Bantuan</h4>
	<div class="row">
		<div class="col-8 offset-2">
			<ol>
				<li class="mb-3">
					Silahkan melakukan <a href="" data-toggle="modal" data-target="#registerModal"><b>PENDAFTARAN</b></a> terlebih dahulu apabila user belum memiliki <b>NAMA PENGGUNA</b> dan <b>KATA SANDI.</b>
				</li>
				<li class="mb-3">
					Setelah melakukan proses <b>PENDAFTARAN</b>, maka user dapat langsung melakukan proses<strong> LOG MASUK</strong>.
				</li>
				<li class="mb-3">
					Apabila user lupa dengan <b>KATA SANDI</b> maka user dapat memilih menu <a href="lupa_pw.php"><b>LUPA KATA SANDI</b>.</a>
				</li>
				<li class="mb-3">
					Kemudian user dapat langsung melakukan proses<b> KONSULTASI</b>.
				</li>
			</ol>
		</div>
	</div>


</div>

<?php include('partials/footer.php') ?>