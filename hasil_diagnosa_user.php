
			<?php
			$username = $_SESSION['SESS_USERNAME'];
			include("paging.php");
			
// include("koneksi_db.php");
			$cek_hasil = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM hasil_diagnosa WHERE  username='$username'"));
			// var_dump($cek_hasil);
			if ($cek_hasil > 0) {

			?>
				<br>
				<div class="text_area" align="justify">
					<div class="title"> Data Hasil Diagnosa</div>

					<table class="table table-striped" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">

						<td align="center"><b>
								<font color="black" size=2>No</font>
							</b></td>
						<td align="center"><b>
								<font color="black" size=2>Tanggal Diagnosa</font>
							</b></td>
						<td align="center"><b>
								<font color="black" size=2>Nama</font>
							</b></td>
						<td align="center"><b>
								<font color="black" size=2>Hasil Diagnosa</font>
							</b></td>
						<td align="center"><b>
								<font color="black" size=2>Proses</font>
							</b></td>

						</tr>
						<?php


						$username = $_SESSION['SESS_USERNAME'];
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
								<td><a href="index_user.php?detail=true&id=<?= $data['id_diagnosa'] ?>"><img src="gambar/detail.png" align="middle" width="20" border="0"> Detail</a></td>
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


			?>


