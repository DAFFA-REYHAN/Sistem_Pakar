<?php
include "tanggal.php";

require_once('otentifikasi.php');
include("koneksi_db.php");
?>
	
<div class="text_area" align="justify">
	
	<br />
	<div class="title">Pengolahan Artikel</div>
	<br />
	<div class="text-center">
		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahartikel">
			<img src="gambar/add.png" align="middle" width="20" border="0"> Tambah
		</button>
	</div>

											<!-- Modal -->
	<div class="modal fade" id="tambahartikel" tabindex="-1" aria-labelledby="tambahartikelLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahartikelLabel">Tambah Artikel </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text_area" align="justify">
					<br />
					<br />
					<form action="tambahartikel.php" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Kode artikel</td>
								<td>:</td>
								<td><input name="kd_artikel" type="text" size="5" maxlength="5" disabled value="<?php echo kdautopenyakit("artikel", "A"); ?>" />
									<input name="kd_artikel" type="hidden" value="<?php echo kdautopenyakit("artikel", "A"); ?>" />
								</td>
							</tr>

							<tr>
								<td>Judul Artiel</td>
								<td>:</td>
								<td><textarea name="judul" cols="30" rows="3"></textarea><br />
										</td>
							</tr>
							<tr>
								<td>Penulis</td>
								<td>:</td>
								<td><textarea name="penulis" cols="30" rows="3"></textarea><br />
								</td>
							</tr>
							<tr>
								<td>Abstrak</td>
								<td>:</td>
								<td><textarea name="abstrak" cols="80" rows="5"></textarea><br />
										</td>
							</tr>
							<tr>
								<td>Isi</td>
								<td>:</td>
								<td><textarea name="isi" cols="80" rows="15"></textarea><br />
								</td>
							</tr>
							<tr>
								<td>Gambar</td>
								<td>:</td>
								<td><input type="file" name="gambar" required /> </td>
							</tr>
							<tr> </tr>
							<tr>
								<td colspan="3" align="center" onclick="return confirm('Artikel yang akan di simpan sudah sesuai ?')"><input type="submit" name="simpan" value="Simpan" />
									<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>

	<?php $jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM artikel"));
	echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> Artikel </center>"; ?>
	<br>
	<table table class="table table-bordered" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" id="pag">
		<tr tr bgcolor="gray" align="center">
			<td><b>
					<font color="white" size=3>Kode Artikel</font>
				</b></td>
			<td><b>
					<font color="white" size=3>Judul Artikel</font>
				</b></td>
			<td><b>
					<font color="white" size=3>Penulis</font>
				</b></td>
			<td><b>
					<font color="white" size=3>Abstrak</font>
				</b></td>

			<td><b>
					<font color="white" size=3>Proses</font>
				</b></td>
		</tr>
		<?php

		$no = 0;
		$qlog = mysqli_query($conn, "SELECT * FROM artikel");
		while ($data = mysqli_fetch_array($qlog)) {
			$no++;
		?>

			<tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
						else echo "isitabelgenap"; ?>">
				<td align="center" name="username"><?php echo $data['kd_artikel']; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['penulis']; ?></td>
				<td><?php echo $data['abstrak']; ?></td>
				<td align="center">

					<!-- Button trigger modal -->
					<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailartikel<?= $data['kd_artikel'] ?>">
						<img src="gambar/detail.png" align="middle" width="20" border="0"> Detail
					</button>

					<!-- Modal -->
					<div class="modal fade" id="detailartikel<?= $data['kd_artikel'] ?>" tabindex="-1" aria-labelledby="detailartikel<?= $data['kd_artikel'] ?>Label" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="detailartikel<?= $data['kd_artikel'] ?>Label">Detail Artikel <?= $data['kd_artikel'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="text_area" align="justify">

								<?php
							
									$kd_artikel = $data['kd_artikel'];
									$qry = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel='$kd_artikel'");
									$detailAr = mysqli_fetch_array($qry);
								?>
									<br>
									<div class="text_area" align="justify">
										<div class="title">Detail Artikel <?php echo $detailAr['kd_artikel']; ?></div>
										<br>
										<table>
											<tr>
												<td colspan="3">
													<hr color="#AAAAAA">
												</td>

											</tr>
											<tr>
												<td class="subtitle">Judul</td>
												<td>:</td>
												<td><?php echo $detailAr['judul']; ?></td>
											</tr>
											<tr>
												<td class="subtitle">Abstrak</td>
												<td>:</td>
												<td><?php echo $detailAr['abstrak']; ?></td>
											</tr>
											<tr>
												<td class="subtitle">Isi</td>
												<td align="center">:</td>
												<td><?php echo $detailAr['isi']; ?></td>
											</tr>
											<tr>
												<td class="subtitle">Gambar</td>
												<td align="center">:</td>
												<td><img src="<?php echo 'gambarartikel/' . $detailAr['gambar']; ?>" alt="" height="150px"></td>
											</tr>
											<tr>
												<td class="subtitle">Penulis</td>
												<td align="center">:</td>
												<td><?php echo $detailAr['penulis']; ?></td>
											</tr>
										</table>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							</div>
						</div>
					</div>

					<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editartikel<?= $data['kd_artikel'] ?>">
					<img src="gambar/edit.png" align="middle" width="20" border="0"> Ubah
					</button>

					<!-- Modal -->
					<div class="modal fade" id="editartikel<?= $data['kd_artikel'] ?>" tabindex="-1" aria-labelledby="editartikel<?= $data['kd_artikel'] ?>Label" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="editartikel<?= $data['kd_artikel'] ?>Label">Edit Artikel <?= $data['kd_artikel'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							<?php
								$kd_artikel = $data['kd_artikel'];
								$qry = mysqli_query($conn, "SELECT * FROM artikel WHERE kd_artikel='$kd_artikel'");
								$data = mysqli_fetch_array($qry);
							?>
								<br>
								<div class="text_area" align="justify">
									<br>
									<form action="aceditartikel.php" method="post" enctype="multipart/form-data">
										<table>
											<tr>
												<td class="subtitle">Kode</td>
												<td>:</td>
												<td><input name="kd_artikel" type="text" size="5" maxlength="5" disabled value="<?php echo $kd_artikel; ?>" />
													<input name="kd_artikel" type="hidden" value="<?php echo $kd_artikel; ?>" />
												</td>
											</tr>
											<tr>
												<td class="subtitle">Judul Artikel</td>
												<td>:</td>
												<td><input name="judul" type="text" value="<?php echo $data['judul']; ?>" size="30" />
														<br />
														</td>
											</tr>
											<tr>
												<td class="subtitle">Penulis</td>
												<td>:</td>
												<td><input name="penulis" type="text" value="<?php echo $data['penulis']; ?>" size="30" />
														<br />
														</td>
											</tr>
											<tr>
												<td class="subtitle">Abstrak</td>
												<td class="subtitle" align="center">:</td>
												<td><textarea name="abstrak" cols="80" rows="5"><?php echo $data['abstrak']; ?></textarea>
														<br></td>
												</td>
											</tr>

											<tr>
												<td class="subtitle">Isi</td>
												<td class="subtitle" align="center">:</td>
												<td><textarea name="isi" cols="80" rows="12"><?php echo $data['isi']; ?></textarea>
														<br></td>
												</td>
											</tr>
											<tr>
												<td>Gambar</td>
												<td>:</td>
												<td><input type="file" name="gambar" /> </td>
											</tr>

											<tr>
												<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data artikel ini akan disimpan?')" />
													<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
												</td>
											</tr>
										</table>
									</form>
								</div>

							
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							</div>
						</div>
					</div>

					| <a href="hapusartikel.php?kd_artikel=<?php echo $data['kd_artikel']; ?>" onclick="return confirm('Apakah anda yakin data artikel ini akan dihapus?')" class="btn btn-danger btn-sm"><img src="gambar/hapus.png" width="20" align="middle" border="0"> Hapus</a>
			</tr>
		<?php } ?>
	</table>
	<?php
	?>


</div>
					