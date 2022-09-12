<div class="panel panel-success">
  <div class="panel-body">
    <?php
    require_once('otentifikasi.php');
    include("koneksi_db.php");
    $act = isset($_GET['act']);

    $u = $_SESSION['SESS_USERNAME'];
    $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa INNER JOIN data_user ON data_user.username = hasil_diagnosa.username WHERE hasil_diagnosa.username = '$u' ORDER BY hasil_diagnosa.id_diagnosa DESC LIMIT 1") or die(mysqli_error());
    $data = mysqli_fetch_array($qry);
    $id = $data['id_diagnosa'];
    $arr_penyakit = (explode("|", $data['kode_penyakit']));
    ?>
    <div class="text_area" align="justify">

      <form action="javascript: void(0)" onclick="popup('cetak.php?act=detail&u=<?php echo $u; ?>&id=<?php echo $id; ?>')" method="post" align="left" cellpadding="5">
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
  </div>
</div>