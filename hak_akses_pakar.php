<?php 
  if (isset($_POST['tombol_simpan'])) {
    $username = $_POST['username'];

    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username = '$username'"));

    if ($cek > 0) {
        $qry = mysqli_query($conn, "UPDATE data_user SET hak_akses = 'pakar' WHERE username = '$username'");

        echo  "<meta http-equiv=\"refresh\" content=\"0; url=index_admin.php?act=hakaksespakar\">";
        $_SESSION['sukses'] = "Hak Akses Berhasil Diubah";
        exit();
      } else {
        echo  "<meta http-equiv=\"refresh\" content=\"0; url=index_admin.php?act=hakaksespakar\">";
        $_SESSION['gagal'] = "Hak Akses Gagal Diubah";
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
  <link href="style.css" rel="stylesheet" type="text/css">
  <div class="text_area" align="justify">
    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
    <form action="" method="post" align="left" cellpadding="5">
      <center>
        <table>
          <tr>
            <td valign="top">Nama Pengguna</td>
            <td valign="top">:</td>
            <td valign="bottom">
              <input name="username" type="text" size="30" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" colspan="3" align="center" valign="bottom">
              <input type="submit" name="tombol_simpan" value="Simpan" />
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