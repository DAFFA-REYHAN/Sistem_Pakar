<?php 
  if (isset($_POST['tombol'])) {
    if ($_POST['g-recaptcha-response'] != "") {
      $username = $_SESSION['SESS_USERNAME'];
      $pertanyaan = $_POST['pertanyaan'];
      $jawaban = clean($_POST['jawaban']);
      $passwordlama = $_POST['passwordlama'];
      $passwordbaru = $_POST['passwordbaru'];

      $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username' and password='" . md5($_POST['passwordlama']) . "'"));

      if ($cek > 0) {
        $qry = mysqli_query($conn, "UPDATE data_user SET password='" . md5($_POST['passwordbaru']) . "', pertanyaan='$pertanyaan', jawaban='" . md5($_POST['jawaban']) . "' WHERE username='$username'");

        echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=ubah_password\">";
        $_SESSION['sukses'] = "Password Berhasil Diubah";
        exit();
      } else {
        echo  "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=ubah_password\">";
        $_SESSION['gagal'] = "Password Gagal Diubah";
        exit();
      }
    } else {
      echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=ubah_password\">";
      $_SESSION['gagal'] = "Password Gagal Diubah";
      exit();
    }
  }
?>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />

<style type="text/css">
  .style2 {
    font-size: xx-small;
    font-style: italic;
    color: #333333;
  }  
</style>

<?php
  require_once('otentifikasi.php');
  include("koneksi_db.php");
  $act = isset($_GET['act']);
  $username = $_SESSION['SESS_USERNAME'];
?>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<div class="text_area" align="justify">
  <br />
 <div class="title">Ubah Kata Kunci <?php echo $username; ?>
  </div>
  <?php
    $username = $_SESSION['SESS_USERNAME'];
    $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
    $data = mysqli_fetch_array($qry);
  ?>
  <link href="style.css" rel="stylesheet" type="text/css">
  <div class="text_area" align="justify">
    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
    <form action="" method="post" align="left" cellpadding="5">
      <center>
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
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">Kata Kunci Lama</td>
            <td valign="top">:</td>
            <td valign="bottom">
              <span id="sprypassword9">
                <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />
              </span>
            </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">Kata Kunci Baru</td>
            <td valign="top">:</td>
            <td valign="bottom">
              <span id="sprypassword99">
                <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
              </span>
              <br>
              <span class="style2">*Panjang minimal 6 karakter.</span>
            </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>Konfirmasi Kata Kunci Baru</td>
            <td>:</td>
            <td>
              <span id="spryconfirm">
                <input name="passwordbaru2" type="password" size="15" maxlength="30" />
              </span>
            </td>
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
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>Pilih Pertanyaan Rahasia</td>
            <td>:</td>
            <td>
              <select name="pertanyaan" id="pertanyaan">
                <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
                <option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
                <option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
                <option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
                <option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
                <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>Jawaban Anda</td>
            <td>:</td>
            <td>
              <span id="sprytextfield889">
                <input name="jawaban" type="text" size="30" maxlength="30">
              </span>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <hr color="#AAAAAA">
            </td>
          </tr>
          <tr>
            <td>Validasi</td>
            <td>:</td>
            <td>
              <div class="g-recaptcha" data-sitekey="6LcEVPUgAAAAAFLhguztcrcslhUU6-uuZYkau_No">
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <hr color="#AAAAAA">
            </td>
          </tr>
          <tr>
            <td height="40" colspan="3" align="center" valign="bottom">
              <input type="submit" name="tombol" value="Simpan" />
              <input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
            </td>
          </tr>
        </table>
      </center>
    </form>
  </div>
</div>

<script type="text/javascript">
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
</script>