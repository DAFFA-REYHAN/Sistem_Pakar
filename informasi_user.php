<?php
require_once('otentifikasi.php');
include "tanggal.php";
if(isset($_REQUEST['page'])){
					$page= $_REQUEST['page'];
				}else{
					$page='1';
				}
?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/gif" href="images/gun.gif" >
<head>
	<meta charset="utf-8">
	<title>Sistem Pakar Kejiwaan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type='text/javascript'>
msg = " -- Selamat datang di website ";
msg = " Sistem Pakar Diagnosa Gangguan Kejiwaan-- " + msg;pos = 0;
function scrollMSG() {
document.title = msg.substring(pos, msg.length) + msg.substring(0, pos); pos++;
if (pos > msg.length) pos = 0
window.setTimeout("scrollMSG()",200);
}
scrollMSG();
</script>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<?php 
require_once('otentifikasi.php');
include("library.php");?>
<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayTime(){
        //buat object date berdasarkan waktu saat ini
        var time = new Date();
        //ambil nilai jam,
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = time.getHours() + "";
        //ambil nilai menit
        var sm = time.getMinutes() + "";
        //ambil nilai detik
        var ss = time.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

</head>

<body>
	<div class="container">
			<nav class="navbar navbar-default navbar-static-top"  >
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav nav-tabs nav-justified">
					<li role="presentation">
								<?php echo"$tglsekarang";?>
								
						</li>
						<li role="presentation" ><a href="index_user.php">Home</a></li>
						<li role="presentation" class="active" ><a href="informasi_user.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi_user.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel_user.php">Artikel</a></li>
						<li role="presentation"><a href="bantuan_user.php">Bantuan</a></li>
						<li role="presentation"><a href="about_user.php">About Us</a></li>
						<li role="presentation"><a href="contact_user.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-success">
				  <div class="panel-body">
					Menu User
					</div>
					<div class="panel-footer"><img src="gambar/iconprofile.png" width="48" height="48" /><a href="profile_user.php">Profile</a></div>
					<div class="panel-footer"><img src="gambar/ubahpassword.png" width="48" height="48" /><a href="ubahpw_user.php">Ubah Password</a></div>
					<div class="panel-footer"><img src="gambar/diagnosa.png" width="48" height="48" /><a href="diagnosa_user.php">Diagnosa</a></div>
					<div class="panel-footer"><img src="gambar/lihathasil.png" width="48" height="48" /><a href="hadil_diagnosa_user.php">Lihat Hasil Diagnosa</a></div>
					<div class="panel-footer"><img src="gambar/keluar.png" width="48" height="48" /><a href="index.php">Keluar</a></div>
					</div>
					
					
					
				<div class="panel panel-info">
				 <div class="panel-footer">
				
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
			<br />
<div class="title"><b><center>INFORMASI SEPUTAR SISTEM PAKAR DIAGNOSA GANGGUAN KEJIWAAN </b></div>
<br /></center>
<b>Sistem pakar</b> (<i>expert system</i>) adalah sistem yang berusaha mengapdosi pengetahuan manusia ke komputer, agar komputer dapat menyelesaikan masalah seperti yang biasa dilakukan oleh para ahli. Sistem pakar yang baik dirancang agar dapat menyelesaikan suatu permasalahan tertentu dengan meniru kerja dari para ahli.
<br>
<br />
<img src="gambar/bantuan.jpg"width="200" height="200" class="templatemo_pic" /><b>Sistem Pakar Diagnosa Penyakit Infeksi yang disebabkan Oleh Bakteri dan Virus</b>
 merupakan suatu sistem pakar yang dirancang sebagai alat bantu dalam mengidentifikasi penyakit akibat infeksi bakteri dan virus bagi para penderita dengan tujuan dalam pengambilan keputusan oleh dokter. Sehingga diharapkan sistem pakar ini dapat membantu para dokter ahli dalam mengidentifikasi penyakit infeksi bakteri dan virus sesuai dengan gejala-gejala yang dialami oleh penderita, apakah sesuai dengan basis pengetahuan didalam sistem pakar ini yang dirancangberdasarkan ahli dibidang penyakit infeksi bakteri dan virus<br />
<br />
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
				
		</div> <!-- end dari class container -->
	


	<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
	


</body>
</html>