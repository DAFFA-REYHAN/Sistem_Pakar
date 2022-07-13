<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/gif" href="images/favicon.gif">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sistem Pakar Diagnosa Penyakit Infeksi Virus Pada Anak</title>
  <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  <?php include("library.php");
  include("koneksi_db.php"); ?>

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
          $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa,data_user WHERE hasil_diagnosa.id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
          $data = mysqli_fetch_array($qry);

          if ($data['kode_penyakit'] != '') {

            $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, penyakit,data_user WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
            $data = mysqli_fetch_array($qry);
          ?>
            <div class="text_area" align="justify">
              <br>
              <div class="title">Hasil Diagnosa</div>
              <br />
              <table cellpadding="5">
                <tr>
                  <td colspan="3">
                    <hr color="#AAAAAA">
                  </td>

                </tr>
                <tr>
                  <td height="30" colspan="3" class="subtitle">Biodata</td>
                </tr>
                <tr>
                  <td>Nama </td>
                  <td valign="top">:</td>
                  <td><?php echo $data['nama_user']; ?></td>
                </tr>
                <tr>
                  <td>Usia</td>
                  <td>:</td>
                  <td><?php echo $data['usia']; ?> tahun</td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td valign="top">:</td>
                  <td><?php if ($data['jenis_kelamin'] == 'L') echo "Laki-laki";
                      else echo "Perempuan"; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['alamat']; ?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">
                    <hr color="#AAAAAA">
                  </td>

                </tr>
                <tr>
                  <td colspan="3" class="subtitle">Hasil Diagnosa</td>
                </tr>

                <tr>
                  <td valign="top">Penyakit</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['nama_penyakit']; ?></td>
                </tr>
                <tr>
                  <td valign="top">Persentase</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['persentase']; ?> persen</td>
                </tr>
                <tr>
                  <td valign="top">Gejala Umum</td>
                  <td valign="top">:</td>
                  <td>
                    <?php
                    $sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala
						WHERE gejala.kode_gejala=relasi_penyakit_gejala.kode_gejala
						AND relasi_penyakit_gejala.kode_penyakit='$data[kode_penyakit]'";
                    $qry_gejala = mysqli_query($conn, $sql_gejala);
                    $i = 0;
                    while ($hsl_gejala = mysqli_fetch_array($qry_gejala)) {
                      $i++;
                      echo "$i. $hsl_gejala[nama_gejala] <br>";
                    }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td valign="top">Definisi</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['definisi']; ?></td>
                </tr>
                <tr>
                  <td valign="top">Pengobatan</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['pengobatan']; ?></td>
                </tr>
                <tr>
                  <td valign="top">Pencegahan</td>
                  <td valign="top">:</td>
                  <td><?php echo $data['pengobatan']; ?></td>
                </tr>
                <tr>
                  <td valign="top">Waktu Diagnosa</td>
                  <td valign="top">:</td>
                  <td valign="top"><?php echo tgl_indo($data['tanggal_diagnosa']); ?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <hr color="#AAAAAA">
                  </td>

                </tr>

              </table>
            </div>


      </div>
      <div id="templatemo_footer" align="center">

      </div>
    </div>
    </center>
</body>

</html>
<?php
          }
