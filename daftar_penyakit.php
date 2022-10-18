<?php
	require_once('otentifikasi.php'); 
	include("koneksi_db.php");
	include("paging.php");
	$act = isset($_GET['act']);
?>

<div class="text_area" align="justify">
	<br />
	<div class="title">Pengolahan Data Penyakit</div>
	<br />
	<?php 
		$jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM penyakit"));
		echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> Data Penyakit</center>"; 
	?>
	<div class="text-center">
		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah">
			<img src="gambar/add.png" align="middle" width="20" border="0"> Tambah
		</button>
	</div>
	<!-- Modal Tambah -->
	<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahLabel">Tambah Penyakit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="text_area" align="justify">
						<br />
						<div class="title">Tambah Data Penyakit</div>
						<br />
						<form action="actambahpenyakit.php" method="post">
							<table>
								<tr>
									<td>Kode Penyakit</td>
									<td>:</td>
									<td>
										<input name="kode_penyakit" type="text" size="5" maxlength="5" disabled value="<?php echo kdautopenyakit("penyakit", "P"); ?>" />
										<input name="kode_penyakit" type="hidden" value="<?php echo kdautopenyakit("penyakit", "P"); ?>" />
									</td>
								</tr>
								<tr>
									<td>Nama Penyakit</td>
									<td>:</td>
									<td>
										<textarea name="nama_penyakit" cols="30" rows="3" require></textarea>
										<br />
									</td>
								</tr>
								<tr>
									<td>Definisi</td>
									<td>:</td>
									<td>
										<textarea name="definisi" cols="80" rows="5" require></textarea>											<br />
									</td>
								</tr>
								<tr>
									<td>Pengobatan</td>
									<td>:</td>
									<td>
										<textarea name="pengobatan" cols="80" rows="5" require></textarea>
										<br />
									</td>
								</tr>
								<tr>
									<td>Pencegahan</td>
									<td>:</td>
									<td>
										<textarea name="pencegahan" cols="80" rows="5" require></textarea>
										<br />
									</td>
								</tr>
								<tr>
									<td colspan="3" align="center" onclick="return confirm('Apakah Anda Yakin Menyimpan Data Penyakit Ini ?')">
										<input type="submit" name="simpan" value="Simpan" />
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
	<br>
	<table table class="table table-bordered " border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" id="myTable">
		<tbody class=" d-block" style="height:450px;width:100%;font:10px;overflow:scroll;">
			<tr tr bgcolor="gray" align="center">
				<td>
					<b>
						<font color="white" size=3>Kode Penyakit</font>
					</b>
				</td>
				<td>
					<b>
						<font color="white" size=3>Nama Penyakit</font>
					</b>
				</td>
				<td>
					<b>
						<font color="white" size=3>Proses</font>
					</b>
				</td>
			</tr>
			<?php
				$no = 0;
				$qlog = mysqli_query($conn, "SELECT * FROM penyakit ORDER BY kode_penyakit ASC");
				while ($data = mysqli_fetch_array($qlog)) {
					$no++;
			?>
					<tr class="<?php 
									if ($no % 2 == 1) echo "isitabelganjil";
									else echo "isitabelgenap table-secondary"; 
								?>">
						<td align="center" name="username"><?php echo $data['kode_penyakit']; ?></td>
						<td><?php echo $data['nama_penyakit']; ?></td>
						<td align="center">
							<!-- Button Trigger Modal Detail -->
							<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail<?= $data['kode_penyakit'] ?>">
								<img src="gambar/detail.png" align="middle" width="20" border="0"> Detail
							</button>
							<!-- Modal Detail -->
							<div class="modal fade" id="detail<?= $data['kode_penyakit'] ?>" tabindex="-1" aria-labelledby="detail<?= $data['kode_penyakit'] ?>Label" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="detail<?= $data['kode_penyakit'] ?>Label">Detail Penyakit <?= $data['kode_penyakit'] ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="text_area" align="justify">
												<?php
													$kode_penyakit = $data['kode_penyakit'];
													$qry = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
													$detailP = mysqli_fetch_array($qry);
												?>
												<br>
												<div class="text_area" align="justify">
													<div class="title">Detail Penyakit <?php echo $detailP['nama_penyakit']; ?></div>
													<br>
													<table>
														<tr>
															<td class="subtitle">Kode Penyakit</td>
															<td>:</td>
															<td><?php echo $kode_penyakit; ?></td>
														</tr>
														<tr>
															<td class="subtitle">Nama Penyakit</td>
															<td>:</td>
															<td><?php echo $detailP['nama_penyakit']; ?></td>
														</tr>
														<tr>
															<td class="subtitle">Gejala</td>
															<td align="center">:</td>
															<td> 
																<?php
																	$sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala WHERE gejala.kode_gejala = relasi_penyakit_gejala.kode_gejala AND relasi_penyakit_gejala.kode_penyakit = '$detailP[kode_penyakit]'";
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
															<td class="subtitle">Definisi</td>
															<td align="center">:</td>
															<td><?php echo $detailP['definisi']; ?></td>
														</tr>
														<tr>
															<td class="subtitle">Pengobatan</td>
															<td align="center">:</td>
															<td><?php echo $detailP['pengobatan']; ?></td>
														</tr>
														<tr>
															<td class="subtitle">Pencegahan</td>
															<td align="center">:</td>
															<td><?php echo $detailP['pencegahan']; ?></td>
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
							<!-- Button Trigger Modal Ubah -->
							<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $data['kode_penyakit'] ?>">
								<img src="gambar/edit.png" align="middle" width="20" border="0"> Ubah
							</button>
							<!-- Modal Ubah -->
							<div class="modal fade" id="edit<?= $data['kode_penyakit'] ?>" tabindex="-1" aria-labelledby="edit<?= $data['kode_penyakit'] ?>Label" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="edit<?= $data['kode_penyakit'] ?>Label">Edit Penyakit <?= $data['kode_penyakit'] ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="text_area" align="justify">
												<?php
													$kode_penyakit = $data['kode_penyakit'];
													$qry = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
													$editP = mysqli_fetch_array($qry);
												?>
												<br>
												<div class="text_area" align="justify">
													<div class="title">Ubah Data Penyakit</div>
													<br>
													<form action="aceditpenyakit.php" method="post">
														<table>
															<tr>
																<td class="subtitle">Kode</td>
																<td class="subtitle">:</td>
																<td>
																	<input name="tkode" type="text" size="5" maxlength="5" disabled value="<?php echo $kode_penyakit; ?>" />
																	<input name="kode_penyakit" type="hidden" value="<?php echo $kode_penyakit; ?>" />
																</td>
															</tr>
															<tr>
																<td class="subtitle">Nama Penyakit</td>
																<td class="subtitle">:</td>
																<td>
																	<input name="nama_penyakit" type="text" value="<?php echo $editP['nama_penyakit']; ?>" size="30" require>
																</td>
															</tr>
															<tr>
																<td class="subtitle">Definisi</td>
																<td class="subtitle" align="center">:</td>
																<td>
																	<textarea name="definisi" cols="80" rows="5" require><?php echo $editP['definisi']; ?></textarea>
																</td>
															</tr>
															<tr>
																<td class="subtitle">Pengobatan</td>
																<td class="subtitle" align="center">:</td>
																<td>
																	<textarea name="pengobatan" cols="80" rows="5" require><?php echo $editP['pengobatan']; ?></textarea>
																</td>
															</tr>
															<tr>
																<td class="subtitle">Pencegahan</td>
																<td class="subtitle" align="center">:</td>
																<td>
																	<textarea name="pencegahan" cols="80" rows="5" require><?php echo $editP['pencegahan']; ?></textarea>
																</td>
															</tr>
															<tr>
																<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah Anda Yakin Mengubah Data Penyakit Ini ?')" />
																</td>
															</tr>
														</table>
													</form>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<a href="hapuspenyakit.php?kode_penyakit=<?php echo $data['kode_penyakit']; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Penyakit Ini ?')" class="btn btn-danger btn-sm mt-2"><img src="gambar/hapus.png" width="20" align="middle" border="0"> Hapus</a>
						</td>
					</tr>
			<?php 
				} 
			?>
		</tbody>
	</table>
</div>