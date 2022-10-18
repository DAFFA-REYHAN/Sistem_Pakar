<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <link rel="icon" type="image/gif" href="images/favicon.gif">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistem Pakar Diagnosa Penyakit Sistem Reproduksi Wanita</title>
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
    <?php 
      include("library.php");
      include("koneksi_db.php"); 
    ?>
  </head>

  <body onLoad="javascript: window.print()">
    <div id="templatemo_container">
      <div class="templatemo_line"></div>
      <div class="templatemo_line"></div>
      <div id="templatemo_header">
        <div id="templatemo_site_title"></div>
        <div id="templatemo_site_slogan"></div>
      </div>
      <div class="templatemo_line"></div>
      <div id="templatemo_content" align="center">
        <div id="templatemo_right_column" align="center">
          <center>
            <?php
              $id = $_GET['id'];
              $username = $_GET['u'];
              $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa INNER JOIN data_user ON data_user.username = hasil_diagnosa.username WHERE hasil_diagnosa.id_diagnosa = '$id'");
              $data = mysqli_fetch_array($qry);
              if ($data['kode_penyakit'] != '') {
                // $arr_penyakit = (explode("|",$data['kode_penyakit']));
            ?>
                <div class="text_area" align="justify">
                  <br>
                  <div class="title">Hasil Diagnosa</div>
                  <br />
                  <table cellpadding="5">
                    <?php include('hasil_penyakit.php') ?>
                  </table>
                </div>
                <div id="templatemo_footer" align="center"></div>
            <?php
              } 
            ?>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>