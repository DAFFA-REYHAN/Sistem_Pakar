<?php
require_once('otentifikasi.php');
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <script type='text/javascript'>
    msg = " -- Selamat datang di website ";
    msg = " Sistem Pakar Diagnosa Gangguan Kejiwaan-- " + msg;
    pos = 0;

    function scrollMSG() {
      document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
      pos++;
      if (pos > msg.length) pos = 0
      window.setTimeout("scrollMSG()", 200);
    }
    scrollMSG();
  </script>

  <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  <?php
  require_once('otentifikasi.php');
  include("library.php"); ?>
  <script type="text/javascript">
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayTime() {
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
      document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
  </script>

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav nav-tabs nav-justified">
            <li role="presentation">
              <?php echo "$tglsekarang"; ?>

            </li>
            <li role="presentation"><a href="index_user.php">Home</a></li>
            <li role="presentation"><a href="informasi_user.php">Informasi</a></li>
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

            <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
            <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
            <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
            <script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
            <link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
            <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
            <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />


            <style type="text/css">
              <!--
              .style2 {
                font-size: xx-small;
                font-style: italic;
                color: #333333;
              }
              -->
            </style>
            <?php

            require_once('otentifikasi.php');
            include("koneksi_db.php");
            $act = isset($_GET['act']);
            $username = $_SESSION['SESS_USERNAME'];
            ?>
            <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
            <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
            <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
            <div class="text_area" align="justify">
              <br />
              <div class="title">Ubah Kata Kunci <?php echo $username; ?></div>
              <?php
              $username = $_SESSION['SESS_USERNAME'];
              $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
              $data = mysqli_fetch_array($qry);
              ?>
              <link href="style.css" rel="stylesheet" type="text/css">
              <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
              <div class="text_area" align="justify">
                <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
                <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
                <form action="?page=10&act=acubahpass&u=<?php echo $username; ?>" method="post" align="left" cellpadding="5">
                  <table>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td valign="top">Nama Pengguna</td>
                      <td valign="top">:</td>
                      <td valign="bottom">
                        <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username; ?>" />

                      </td>
                    </tr>
                    <tr>
                      <td valign="top">Kata Kunci Lama</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword9">
                          <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />
                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>

                    </tr>
                    <tr>
                      <td valign="top">Kata Kunci Baru</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword99">
                          <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                        <br>
                        <span class="style2">Panjang minimal 6 karakter.</span>
                      </td>

                    </tr>
                    <tr>
                      <td>Konfirmasi Kata Kunci Baru</td>
                      <td>:</td>
                      <td><span id="spryconfirm">
                          <input name="passwordbaru2" type="password" size="15" maxlength="30" />
                          <span class="confirmRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Konfirmasi Kata Kunci Harus Diisi.</span>
                          <span class="confirmInvalidMsg"><img src="gambar/hapus.png" width="10" height="10"> Kata Kunci Harus Cocok.</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <div class="subtitle">Jika Anda Lupa Kata Kunci</div>
                      </td>
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
                      <td><span id="sprytextfield889">
                          <input name="jawaban" type="text" size="30" maxlength="30">
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Jawaban harus diisi.</span>
                        </span></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td>Masukan Angka Berikut</td>
                      <td>:</td>
                      <td><span id="sprytextfield779">
                          <img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12" />
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
                        <input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
                      </td>
                    </tr>
                  </table>
                </form>
              </div>

            </div>
            <?php

            if ($act == "acubahpass") {
              function clean($str)
              {
                $str = @trim($str);
                if (get_magic_quotes_gpc()) {
                  $str = stripslashes($str);
                }
                return mysqli_real_escape_string($str);
              }

              $username = $_GET['u'];
              $pertanyaan = $_POST['pertanyaan'];
              $jawaban = clean($_POST['jawaban']);
              $passwordlama = $_POST['passwordlama'];
              $passwordbaru = $_POST['passwordbaru'];






              if (isset($_POST['tombol'])) {
                if (($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))) {

                  $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username' and password='" . md5($_POST['passwordlama']) . "'"));

                  if ($cek > 0) {
                    $qry = mysqli_query($conn, "UPDATE data_user SET password='" . md5($_POST['passwordbaru']) . "',  
	   pertanyaan='$pertanyaan', jawaban='" . md5($_POST['jawaban']) . "' WHERE username='$username'");

                    echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?page=10&current10=curren&act=berhasil&u=$username\">";
                  } else {
                    echo  "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?page=10&current10=curren&act=gagal&u=$username\">";
                  }
                } else {
                  echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?page=10&current10=curren&act=gagal2&u=$username\">";
                }
              }
            } elseif ($act == "berhasil") {
            ?>
              <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
              <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
              <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

              <div class="text_area" align="justify">
                <center><img src="images/TERIMAKASIH.jpg" title="thanks" />
                  <br />
                  <div class="title">Terima Kasih<br>
                    <br>
                    Proses Ubah Kata Kunci Anda Berhasil Disimpan<br>
                </center>
              </div>

            <?php

            } elseif ($act == "gagal") {

              $username = $_GET['u'];
              $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
              $data = mysqli_fetch_array($qry);


            ?>
              <br>
              <link href="style.css" rel="stylesheet" type="text/css">
              <div class="text_area" align="justify">
                <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
                <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
                <div class="title">
                  <font color="red">Ubah Kata Kunci Gagal Disimpan</font>
                </div>
                <br>
                <form action="?page=10&act=acubahpass&u=<?php echo $username; ?>" method="post" align="left" cellpadding="5">
                  <table>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td valign="top">Nama Pengguna</td>
                      <td valign="top">:</td>
                      <td valign="bottom">
                        <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username; ?>" />

                      </td>

                    </tr>

                    <tr>
                      <td valign="top">Kata Kunci Lama</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword9">
                          <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />

                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                        <br><span class="style2">
                          <font color="red"><strong> Password Lama Salah</strong></font>
                        </span>
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>

                    </tr>
                    <tr>
                      <td valign="top">Kata Kunci Baru</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword99">
                          <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                        <br>
                        <span class="style2">Panjang minimal 6 karakter.</span>
                      </td>

                    </tr>
                    <tr>
                      <td>Konfirmasi Kata Kunci Baru</td>
                      <td>:</td>
                      <td><span id="spryconfirm">
                          <input name="passwordbaru2" type="password" size="15" maxlength="30" />
                          <span class="confirmRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Konfirmasi Kata Kunci Harus Diisi.</span>
                          <span class="confirmInvalidMsg"><img src="gambar/hapus.png" width="10" height="10"> Kata Kunci Harus Cocok.</span></span></td>
                    </tr>



                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <div class="subtitle">Jika Anda Lupa Kata Kunci</div>
                      </td>
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
                      <td><span id="sprytextfield889">
                          <input name="jawaban" type="text" size="30" maxlength="30">
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Jawaban harus diisi.</span>
                        </span></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td>Masukan Angka Berikut</td>
                      <td>:</td>
                      <td><span id="sprytextfield779">
                          <img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12" />
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
                        <input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
                      </td>
                    </tr>
                  </table>
                </form>
              </div>


            <?php
            } elseif ($act == "gagal2") {

              $username = $_GET['u'];
              $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
              $data = mysqli_fetch_array($qry);


            ?>
              <br>
              <link href="style.css" rel="stylesheet" type="text/css">
              <div class="text_area" align="justify">
                <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
                <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
                <div class="title">
                  <font color="red">Ubah Kata Kunci Gagal Disimpan</font>
                </div>
                <br>
                <form action="?page=10&act=acubahpass&u=<?php echo $username; ?>" method="post" align="left" cellpadding="5">
                  <table>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td valign="top">Nama Pengguna</td>
                      <td valign="top">:</td>
                      <td valign="bottom">
                        <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username; ?>" />

                      </td>

                    </tr>

                    <tr>
                      <td valign="top">Kata Kunci Lama</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword9">
                          <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />

                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>

                    </tr>
                    <tr>
                      <td valign="top">Kata Kunci Baru</td>
                      <td valign="top">:</td>
                      <td valign="bottom"><span id="sprypassword99">
                          <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
                          <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                          <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                        <br>
                        <span class="style2">Panjang minimal 6 karakter.</span>
                      </td>

                    </tr>
                    <tr>
                      <td>Konfirmasi Kata Kunci Baru</td>
                      <td>:</td>
                      <td><span id="spryconfirm">
                          <input name="passwordbaru2" type="password" size="15" maxlength="30" />
                          <span class="confirmRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Konfirmasi Kata Kunci Harus Diisi.</span>
                          <span class="confirmInvalidMsg"><img src="gambar/hapus.png" width="10" height="10"> Kata Kunci Harus Cocok.</span></span></td>
                    </tr>


                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <div class="subtitle">Jika Anda Lupa Kata Kunci</div>
                      </td>
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
                      <td><span id="sprytextfield889">
                          <input name="jawaban" type="text" size="30" maxlength="30">
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Jawaban harus diisi.</span>
                        </span></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td>Masukan Angka Berikut</td>
                      <td>:</td>
                      <td><span id="sprytextfield779">
                          <img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12" />
                          <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span>
                          <span class="textfieldMaxCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Angka harus diisi dengan benar.</span></span>
                        <br><span class="style2">
                          <font color="red"><strong> Angka yang Anda Masukan Salah</strong></font>
                        </span>
                      </td>

                    </tr>
                    <tr>
                      <td colspan="3">
                        <hr color="#AAAAAA">
                      </td>

                    </tr>
                    <tr>
                      <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="Simpan" />
                        <input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
                      </td>
                    </tr>
                  </table>
                </form>
              </div>


            <?php
            }


            ?>

            <script type="text/javascript">
              <!--
              var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9", {
                minChars: 6,
                validateOn: ["blur"]
              });
              var sprypassword99 = new Spry.Widget.ValidationPassword("sprypassword99", {
                minChars: 6,
                validateOn: ["blur"]
              });
              var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {
                minChars: 5,
                validateOn: ["blur"]
              });
              var sprytextfield49 = new Spry.Widget.ValidationTextField("sprytextfield49", "nama", {
                minChars: 2,
                validateOn: ["blur"]
              });
              var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59", "integer", {
                minValue: 1,
                maxValue: 12,
                maxChars: 2,
                validateOn: ["blur"]
              });
              var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69", "alamat", {
                minChars: 4,
                validateOn: ["blur"]
              });
              var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779", "none", {
                minChars: 4,
                maxChars: 4,
                validateOn: ["blur"]
              });
              var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889", "nama", {
                validateOn: ["blur"]
              });
              var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword99", {
                validateOn: ["blur"]
              });

              //
              -->
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