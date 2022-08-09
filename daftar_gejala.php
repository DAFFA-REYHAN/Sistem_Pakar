
						<div class="text_area" align="justify">
							<br />
							<div class="title">Pengolahan Data Gejala</div>
							<br />
								<?php $jmldata = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gejala"));
								echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record gejala</center>"; ?>
								<br>
								<div class="text-center">

									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tGejala">
										<img src="gambar/add.png" align="middle" width="20" border="0"> Tambah
									</button>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="tGejala" tabindex="-1" aria-labelledby="tGejalaLabel" aria-hidden="true">
									<div class="modal-dialog ">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="tGejalaLabel">Tambah Gejala </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="text_area" align="justify">
												<br />
												<br />
												<form action="actambahgejala.php" method="post">
													<table>
														<tr>
															<td class="subtitle">Kode Gejala</td>
															<td>:</td>
															<td><input name="kode_gejala" type="text" size="5" maxlength="5" disabled value="<?php echo kdautogejala("gejala", "G");?>" />
															<input name="kode_gejala" type="hidden" value="<?php echo kdautogejala("gejala", "G");?>" /></td>
														</tr>
														
														<tr>
															<td class="subtitle">Nama Gejala</td>
															<td>:</td>
															<td><textarea name="nama_gejala" cols="30" rows="3" require></textarea><br />
															</td>
														</tr>
														<tr>
															<td colspan="3" align="center" onclick="return confirm('gejala yang akan di simpan sudah sesuai ?')"><input type="submit" name="simpan" value="Simpan" />
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
								<table table class="table table-bordered" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" id="pag">
									<tr tr bgcolor="gray" align="center">
										<td><b>
												<font color="white" size=3>Kode Gejala</font>
											</b></td>
										<td><b>
												<font color="white" size=3>Nama Gejala</font>
											</b></td>
										<td><b>
												<font color="white" size=3>Proses</font>
											</b></td>
									</tr>
									<?php

									$no = 0;
									$qlog = mysqli_query($conn, "SELECT * FROM gejala ORDER BY kode_gejala ASC");
									while ($data = mysqli_fetch_array($qlog)) {
										$no++;
									?>
										<tr class="<?php if ($no % 2 == 1) echo "isitabelganjil";
													else echo "isitabelgenap"; ?>">
											<td align="center"><?php echo $data['kode_gejala']; ?></td>
											<td><?php echo $data['nama_gejala']; ?></td>
											<td align="center">
											<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $data['kode_gejala'] ?>">
												<img src="gambar/edit.png" align="middle" width="20" border="0"> Ubah
												</button>

												<!-- Modal -->
												<div class="modal fade" id="edit<?= $data['kode_gejala'] ?>" tabindex="-1" aria-labelledby="edit<?= $data['kode_gejala'] ?>Label" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="edit<?= $data['kode_gejala'] ?>Label">Edit gejala <?= $data['kode_gejala'] ?></h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="text_area" align="justify">

															<?php
																$kode_gejala = $data['kode_gejala'];
																$qry = mysqli_query($conn, "SELECT * FROM gejala WHERE kode_gejala='$kode_gejala'");
																$editP = mysqli_fetch_array($qry);
															?>
																<br>
																<div class="text_area" align="justify">
																	<div class="title">Ubah Data gejala</div>
																	<br>
																	<form action="aceditgejala.php" method="post">
																		<table>
																			<tr>
																				<td colspan="3">
																					<hr color="#AAAAAA">
																				</td>

																			</tr>
																			<tr>
																				<td class="subtitle">Kode</td>
																				<td class="subtitle">:</td>
																				<td><input name="tkode" type="text" size="5" maxlength="5" disabled value="<?php echo $kode_gejala; ?>" />
																					<input name="kode_gejala" type="hidden" value="<?php echo $kode_gejala; ?>" />
																				</td>
																			</tr>
																			<tr>
																				<td class="subtitle">Nama gejala</td>
																				<td class="subtitle">:</td>
																				<td><textarea name="nama_gejala" cols="30" rows="3" require><?php echo $editP['nama_gejala']; ?></textarea>
																			</tr>
																			
																			<tr>
																				<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data gejala ini akan disimpan?')" />
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
												| <a href="hapusgejala.php?kode_gejala=<?php echo $data['kode_gejala']; ?>" onclick="return confirm('Apakah anda yakin data gejala ini akan dihapus?')" class="btn btn-danger btn-sm"><img src="gambar/hapus.png" width="20" align="middle" border="0"> Hapus</a></td>
										</tr>
									<?php } ?>
								</table>
								
						</div>
