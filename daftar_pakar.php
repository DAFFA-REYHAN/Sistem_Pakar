<?php
	session_start();
	unset($_SESSION['SESS_USERNAME']);

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
<?php  include("library.php"); include("koneksi_db.php");?>
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
						<li role="presentation" class="active"><a href="index.php">Home</a></li>
						<li role="presentation"> <a href="informasi.php">Informasi</a></li>
						<li role="presentation"><a href="lokasi_display.php">Lokasi</a></li>
						<li role="presentation"><a href="Artikel_display.php">Artikel</a></li>
						<li role="presentation"><a href="bantuan.php">Bantuan</a></li>
						<li role="presentation"><a href="about.php">About Us</a></li>
						<li role="presentation"><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
			
		</nav>
		
		
			<div class="jumbotron">
				<h2>Selamat Datang di Website Sistem Pakar Kejiwaan!</h2>
				<p>Daftarkan diri anda segera untuk menggunakan fasilitas diagnosis gangguan kejiwaan.</p>
				<a href="daftar.php" class="btn btn-large btn-success">Daftar</a>
			</div>
		
		<div class="row">
				<div class="col-md-4">
			<div class="panel panel-info">
				 <div class="panel-footer">
				<form class="form-horizontal" role="form" method="post" action="login.php">
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">User</label>
						<div class="col-sm-10">
						<input type="text" class="form-control"  name="username" placeholder="Masukkan username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" placeholder="Masukkan password">
						</div>
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
		  
        <div class="form-group">
            <label class="control-label col-xs-3">Status</label>
            <div class="col-xs-4">
                <label class="radio-inline">
                    <input type="radio" name="status" value="pakar"> Pakar
                </label>
            </div>
            <div class="col-xs-4">
                <label class="radio-inline">
                    <input type="radio" name="status" value="user"> User
                </label>
            </div>
        </div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2">
						<button type="submit" class="btn btn-primary btn-lg active">Masuk</button>
						<a href="lupa_pw.php" class="btn btn-primary btn-lg active" role="button">Lupa Password</a>
						
						</div>
					</div>
				</div>
				</div>
				<div class="panel panel-info">
				 <div class="panel-footer">
				</form>
				</form>
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
			<link href="style.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {
	font-size: xx-small;
	font-style: italic;
	color: #333333;
}
-->
</style>
<div class="text_area" align="justify">
<br/>
<div class="title">Form Pendaftaran Pakar</div>
<form action="proses_registrasi_pakar.php" method="post">
<table align="left" cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td valign="top">Nama Pengguna</td>
    <td valign="top">:</td>
    <td valign="bottom" ><span id="sprytextfield7">
      <input name="username" type="text" size="30" maxlength="30"/>
	  <span class="textfieldRequiredMsg"><img src="gambar/hapus.png"width="10" height="10"> Username Harus Diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png"width="10" height="10"> Panjang minimal 5 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png"width="10" height="10"> Format penulisan tanpa spasi.</span>
	  <br>
	  <span class="style2">Panjang minimal 5 karakter.</span>
	
</td>
  </tr>
    <tr>
    <td valign="top">Kata Kunci</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword">
	  <input name="password" type="password" id="password" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="gambar/hapus.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="gambar/hapus.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br>
	  <span class="style2">Panjang minimal 6 karakter.</span> 
	  </td>
	   
  </tr>
  <tr>
    <td>Konfirmasi Kata Kunci</td>
    <td>:</td>
    <td><span id="spryconfirm">
      <input name="password2" type="password" size="15" maxlength="30" />
      <span class="confirmRequiredMsg"><img src="gambar/hapus.png"width="10" height="10"> Konfirmasi Password Harus Diisi.</span> 
         <span class="confirmInvalidMsg"><img src="gambar/hapus.png"width="10" height="10"> Password Harus Cocok.</span></span></td>
  </tr>
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Biodata</div></td>
    
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Jika Anda Lupa Kata Kunci</div></td>
  </tr>
  <tr>
    <td>Pilih Pertanyaan Rahasia</td>
    <td>:</td>
    <td><select name="pertanyaan" id="pertanyaan">
        <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
		<option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
		<option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
		<option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
		<option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
        <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
      </select></td>
  </tr>
  <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield88">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="gambar/hapus.png"width="10" height="10"> Jawaban harus diisi.</span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
	<td>Masukan Angka Berikut</td>
	<td>:</td>
	<td><span id="sprytextfield77">
	<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12"/>
	<span class="textfieldRequiredMsg"><img src="gambar/hapus.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png"width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>
  
  </tr>
  <tr>
    <td height="40" colspan="3" align="right" valign="bottom"><input type="submit" name="tombol" value="Daftar" /><input type="reset" name="reset" value="Hapus" />
	</td>
    </tr>
</table>
</form>
</div>

<script type="text/javascript">
<!--

var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7","data", {minChars:5, validateOn:["blur"]});
var sprypassword = new Spry.Widget.ValidationPassword("sprypassword",{minChars:6, validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3","none", {minChars:5, validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4","nama", {minChars:2, validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5","integer",{minValue:1,maxValue:12, maxChars:2, validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6","alamat", {minChars:4, validateOn:["blur"]});
var sprytextfield77 = new Spry.Widget.ValidationTextField("sprytextfield77","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88","nama", {validateOn:["blur"]});
var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword",{validateOn:["blur"]});
var validsel = new Spry.Widget.ValidationSelect("validsel", {validateOn:["blur"]});
//-->
</script>
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
