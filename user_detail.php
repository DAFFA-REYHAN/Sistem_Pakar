<div class="panel panel-success">
  <div class="panel-body">
  <?php 
    $username = $_SESSION['SESS_USERNAME'];
    $id = $_GET['id'];
    $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa INNER JOIN data_user ON data_user.username = hasil_diagnosa.username WHERE hasil_diagnosa.id_diagnosa = '$id'");
    $data = mysqli_fetch_array($qry);
    if ($data['kode_penyakit'] != '') {
      $arr_penyakit = (explode("|",$data['kode_penyakit']));
  ?>
      <div class="text_area" align="justify">
        <br>
        <div class="title">Hasil Diagnosa</div>
        <br />
        <form action="javascript: void(0)" onclick="popup('cetak.php?act=detail&u=<?php echo $username; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
          <table cellpadding="5">
            <?php include('hasil_penyakit.php') ?>
            <tr>
              <td colspan="3" align="center">
                <input type="submit" name="submit" value="Cetak" />
              </td>
            </tr>
          </table>
        </form>
      </div>
  <?php
    } 
    else {
      $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa INNER JOIN data_user ON data_user.username = hasil_diagnosa.username WHERE hasil_diagnosa.id_diagnosa='$id'");
      $data = mysqli_fetch_array($qry);
  ?>
      <div class="text_area" align="justify">
        <br>
        <div class="title">Hasil Diagnosa</div>
        <br />
        <form action="javascript: void(0)" onclick="popup('cetak.php?u=<?php echo $username; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
          <table cellpadding="5">
            <tr>
              <td colspan="3">
                <hr color="#AAAAAA">
              </td>
            </tr>
            <tr>
              <td height="30" colspan="3" class="subtitle">
                Biodata
              </td>
            </tr>
            <tr>
              <td valign="top">Nama</td>
              <td valign="top">:</td>
              <td>
                <?php 
                  echo $data['nama_user']; 
                ?>
              </td>
            </tr>
            <tr>
              <td valign="top">Usia</td>
              <td valign="top">:</td>
              <td>
                <?php 
                  echo $data['usia']; 
                ?> Tahun
              </td>
            </tr>
            <tr>
              <td valign="top">Jenis Kelamin</td>
              <td valign="top">:</td>
              <td>
                <?php 
                  if ($data['jenis_kelamin'] == 'L') echo "Laki-laki";
                  else echo "Perempuan"; 
                ?>
              </td>
            </tr>
            <tr>
              <td valign="top">Alamat</td>
              <td valign="top">:</td>
              <td>
                <?php 
                  echo $data['alamat']; 
                ?>
              </td>
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
              <td>
              Hasil kesimpulan diagnosa berdasarkan proses sistem dari data yang anda masukkan, anda tidak mengalami gangguan penyakit reproduksi apapun, segera konsultasikan diri anda ke dokter spesialis obgyn karena mungkin penyakit yang anda derita belum terdaftar di database sistem kami.
              </td>
            </tr>
            <tr>
              <td>Waktu Diagnosa</td>
              <td valign="top">:</td>
              <td valign="top">
                <?php 
                  echo tgl_indo($data['tanggal_diagnosa']); 
                ?>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <hr color="#AAAAAA">
              </td>
            </tr>
            <tr>
              <td colspan="3" align="center">
            </tr>
          </table>
        </form>
      </div>
  <?php 
    }
  ?>
  </div>
</div>