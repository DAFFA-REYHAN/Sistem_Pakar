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
	<nav class="navbar navbar-default navbar-static-top" >
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav nav-tabs nav-justified">
					<li role="presentation">
							<?php echo"$tglsekarang";?> 
						</li>
						<li role="presentation"><a href="index_pakar.php">Home</a></li>
						<li role="presentation"><a href="informasi_pakar.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel.php">Artikel</a></li>
						<li role="presentation" class="active"><a href="bantuan_pakar.php">Bantuan</a></li>
						<li role="presentation"><a href="about_pakar.php">About Us</a></li>
						<li role="presentation"><a href="contact_pakar.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-success">
				  <div class="panel-body">
					Menu Pakar
					</div>
					<div class="panel-footer"><img src="gambar/ubahpassword.png" width="48" height="48" /><a href="ubahpw_pakar.php">Ubah Password</a></div>
					<div class="panel-footer"><img src="gambar/daftar_penyakit.png" width="48" height="48" /><a href="daftar_penyakit.php">Daftar Penyakit</a></div>
					<div class="panel-footer"><img src="gambar/daftar_gejala.png" width="48" height="48" /><a href="daftar_gejala.php">Daftar Gejala</a></div>
					<div class="panel-footer"><img src="gambar/relasi.png" width="48" height="48" /><a href="relasi.php">Relasi</a></div>
					<div class="panel-footer"><img src="gambar/timbangan.png" width="48" height="48" /><a href="bobot_gejala.php">Bobot Gejala</a></div>
					<div class="panel-footer"><img src="gambar/artikel.png" width="48" height="48" /><a href="artikel.php">Artikel</a></div>
					<div class="panel-footer"><img src="gambar/peta.png" width="48" height="48" /><a href="lokasi.php">Lokasi</a></div>
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
			<table>
<tr><td><img src="gambar/help.png" width="25" height="25" align="middle"/></td>
<td> <h2>Halaman tambah lokasi berfungsi untuk menambahkan data lokasi. Penambahan data lokasi dilakukan dengan beberapa langkah yaitu: </h2>
<tr><td><img src="gambar/mymaps.png" width="265" height="325" align="middle"/></td>
<td> <h3> 1.	Melakukan registrasi peta di <a href="http://www.google.co.id/maps"> Google </a> dengan cara memilih menu My Maps. </h3></td>
</tr>
<tr><td></td><td></td></tr>
</tr>
<tr><td></td><td></td></tr>
<tr><td><img src="gambar/addtomap.png" width="265" height="325" align="middle"/></td>
<td> <h3>2. Memilih menu create dan ketiikan nama tempat yang di maksud setelah tempat muncul di google maps,
 klik tempat dan add to map.</h3>
</tr>
<tr><td></td><td></td></tr>
<tr><td><img src="gambar/namatempat.png" width="265" height="325" align="middle"/></td>
<td> <h3>3. Ubah Untitle layer menjadi nama tempat.</h3>
</tr>
<tr><td><img src="gambar/sharesetting.png" width="365" height="325" align="middle"/></td>
<td> <h3>4. Melakukan share lokasi. Klik share di sebelah add layer isikan Map Title dan Description sesuai dengan lokasi lalu tekan ok.
 Ubah who has access dari private menjadi public on the web lalu copy kode mid sperti pada gambar disamping. 
 Jika sudah selesai klik done.</h3>
</tr>
<tr><td><img src="gambar/tambahdatalokasi.png" width="365" height="325" align="middle"/></td>
<td> <h5>Memasukkan nama rumah sakit, dan kota kita perlu memasukkan link google maps pada halaman tambah lokasi.
Pada kolom link google maps isikan https://mapsengine.google.com/map/u/0/embed?mid= diikuti kode mid yang 
tadi kita copy pada saat melakukan share setting. </h5>
</tr>
<tr><td></td><td></td></tr>

</table>
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