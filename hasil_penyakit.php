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
            <?php
            foreach ($arr_penyakit as $value) {
              $kd = substr($value,0,5);
              $qry_penyakit = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit = '$kd'") or die(mysqli_error());
              $data_penyakit = mysqli_fetch_array($qry_penyakit);
            ?>
              <tr>
                <td valign="top">Penyakit</td>
                <td valign="top">:</td>
                <td>
                  <b>
                    <?php 
                      echo $data_penyakit['nama_penyakit'] . ' (' . substr($value,6) . ' %)'; 
                    ?>
                  </b>
                </td>
              </tr>
              <tr>
                <td valign="top">Gejala Umum</td>
                <td valign="top">:</td>
                <td>
                  <?php
                    $sql_gejala = "SELECT gejala.* FROM gejala
                                    INNER JOIN relasi_penyakit_gejala ON relasi_penyakit_gejala.kode_gejala = gejala.kode_gejala
                                    AND relasi_penyakit_gejala.kode_penyakit = '$data_penyakit[kode_penyakit]'";
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
                <td>
                  <?php 
                    echo $data_penyakit['definisi']; 
                  ?>
                </td>
              </tr>
              <tr>
                <td valign="top">Pengobatan</td>
                <td valign="top">:</td>
                <td>
                  <?php 
                    echo $data_penyakit['pengobatan']; 
                  ?>
                </td>
              </tr>
              <tr>
                <td valign="top">Pencegahan</td>
                <td valign="top">:</td>
                <td>
                  <?php 
                    echo $data_penyakit['pencegahan']; 
                  ?>
                </td>
              </tr>
              <tr>
                <td colspan="10">
                </td>
              </tr>
            <?php
            }
            ?>
            <tr>
              <td valign="top">Waktu Diagnosa</td>
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