
        <div class="panel panel-success">
          <div class="panel-body">

            <?php 
            $username = $_SESSION['SESS_USERNAME'];
              $id = $_GET['id'];
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
                          $sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala WHERE gejala.kode_gejala=relasi_penyakit_gejala.kode_gejala AND relasi_penyakit_gejala.kode_penyakit='$data[kode_penyakit]'";
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
                $qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, data_user WHERE hasil_diagnosa.id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");

                $data = mysqli_fetch_array($qry);
                // var_dump($data);
                // die;
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
                        <td height="30" colspan="3" class="subtitle">Biodata </td>
                      </tr>
                      <tr>
                        <td>Nama </td>
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
                        <td>Kesimpulan</td>
                        <td valign="top">:</td>
                        <td>Hasil kesimpulan diagnosa berdasarkan proses sistem dari data yang anda masukkan, anda tidak mengalami gangguan penyakit rahim apapun, segera konsultasikan diri anda ke ahli penyakit rahim karena mungkin
                          penyakit yang anda derita belum terdaftar di database sistem kami.</td>
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

                      </tr>
                    </table>
                </div>
                <?php 
              }
              ?>
          </div>
        </div>
      