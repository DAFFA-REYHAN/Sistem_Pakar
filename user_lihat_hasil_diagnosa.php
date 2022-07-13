<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<?php
require_once('otentifikasi.php');
include("koneksi_db.php");
$act = $_GET['act'];
$username = $_GET['u'];
include("paging.php");
if ($act == "0") {

  $cek_hasil = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE  username='$username'"));

  if ($cek_hasil > 0) {

?>
    <br>
    <div class="text_area" align="justify">
      <div class="title"> Data Hasil Diagnosa</div>

      <table border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
        <tr bgcolor="#00CC99" align="center">
          <td align="center"><b>
              <font color="white" size=2>No</font>
            </b></td>
          <td align="center"><b>
              <font color="white" size=2>Tanggal Diagnosa</font>
            </b></td>
          <td align="center"><b>
              <font color="white" size=2>Nama</font>
            </b></td>
          <td align="center"><b>
              <font color="white" size=2>Hasil Diagnosa</font>
            </b></td>
          <td align="center"><b>
              <font color="white" size=2>Proses</font>
            </b></td>

        </tr>
        <?php


        $username = $_GET['u'];
        $no = 0;
        $qlog = mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE username='$username' ORDER BY tanggal_diagnosa DESC");
        while ($data = mysqli_fetch_array($qlog)) {
          $tanggal = tgl_indo($data['tanggal_diagnosa']);
          $no++;
        ?>

          <tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
                      else echo "isitabelgenap"; ?>">
            <td align="center"><?php echo $no; ?></td>
            <td><?php echo $tanggal; ?></td>
            <td>
              <?php

              $dnama = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
              $nama = mysqli_fetch_array($dnama);

              echo $nama['nama_user']; ?></td>
            <td>
              <?php
              $qpenyakit = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$data[kode_penyakit]'");
              if (mysqli_num_rows($qpenyakit)) {
                $penyakit = mysqli_fetch_array($qpenyakit);
                echo $penyakit['nama_penyakit'] . "&nbsp;(" . $data['persentase'] . "%)";
              } else {
                echo 'Tidak Mengalami Penyakit';
              }
              ?>
            </td>
            <td><a href="?page=8&act=detail&u=<?php echo $username; ?>&id=<?php echo $data['id_diagnosa']; ?>"><img src="images/query.png" align="middle" width="20" border="0"> Detail</a></td>
          </tr>
        <?php
        }
        ?>

      </table>
    </div>
  <?php
  } else {
  ?>
    <br>
    <div class="text_area" align="justify">
      <div class="title"> Data Hasil Diagnosa Masih Kosong</div>
      <br><br>
      <div class="subtitle"> Anda Belum Melakukan Diagnosa</div>
    </div>
  <?php
  }
}

if ($act == 'detail') {

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
      <form action="javascript: void(0)" onclick="popup('cetak.php?act=detail&u=<?php echo $username; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
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
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $data['nama_user']; ?></td>
          </tr>
          <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?php echo $data['usia']; ?> tahun</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php if ($data['jenis_kelamin'] == 'L') echo "Laki-laki";
                else echo "Perempuan"; ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
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
          <tr>
            <td colspan="3" align="center">
              <input type="submit" name="submit" value="Cetak" />
            </td>
          </tr>
        </table>
    </div>
  <?php



  } else {
    echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=8&act=detail0&id=$id&u=$username\">";
  }
}

if ($act == "detail0") {
  $id = $_GET['id'];
  $username = $_GET['u'];
  $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, data_user WHERE  id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
  $data = mysqli_fetch_array($qry);
  ?>
  <div class="text_area" align="justify">
    <br>
    <div class="title">Hasil Diagnosa</div>
    <br />
    <form action="javascript: void(0)" onclick="popup('cetak2.php?u=<?php echo $username; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
      <table cellpadding="5">
        <tr>
          <td colspan="3">
            <hr color="#AAAAAA">
          </td>

        </tr>
        <tr>
          <td height="30" colspan="3" class="subtitle">Biodata </td>
        </tr>
        <tr>
          <td width="122">Nama </td>
          <td width="7">:</td>
          <td width="816"><?php echo $data['nama_user']; ?></td>
        </tr>
        <tr>
          <td>Usia</td>
          <td>:</td>
          <td><?php echo $data['usia']; ?> tahun</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php if ($data['jenis_kelamin'] == 'L') echo "Laki-laki";
              else echo "Perempuan"; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
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
          <td valign="top">Kesimpulan</td>
          <td valign="top">:</td>
          <td>Hasil kesimpulan diagnosa, anda tidak mengalami jenis penyakit infeksi bakteri dan virus, disebabkan tidak ada gejala yang anda alami.</td>
        </tr>

        <tr>
          <td>Waktu Diagnosa</td>
          <td valign="top">:</td>
          <td valign="top"><?php echo tgl_indo($data['tanggal_diagnosa']); ?></td>
        </tr>
        <tr>
          <td colspan="3">
            <hr color="#AAAAAA">
          </td>

        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="submit" name="submit" value="Cetak" />
          </td>
        </tr>
      </table>
  </div>


<?php
}
?>