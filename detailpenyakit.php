
<div class="text_area" align="justify">

	<?php
	if ($act == "detailpenyakit") {
		$kode_penyakit = $_GET['kode_penyakit'];
		$qry = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
		$data = mysqli_fetch_array($qry);
	?>
		<br>
		<div class="text_area" align="justify">
			<div class="title">Detail Penyakit <?php echo $data['nama_penyakit']; ?></div>
			<br>
			<table>
				<tr>
					<td colspan="3">
						<hr color="#AAAAAA">
					</td>

				</tr>
				<tr>
					<td class="subtitle">Kode Penyakit</td>
					<td>:</td>
					<td><?php echo $kode_penyakit; ?></td>
				</tr>
				<tr>
					<td class="subtitle">Nama Penyakit</td>
					<td>:</td>
					<td><?php echo $data['nama_penyakit']; ?></td>
				</tr>
				<tr>
					<td class="subtitle">Gejala</td>
					<td align="center">:</td>
					<td> <?php
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
					<td class="subtitle">Definisi</td>
					<td align="center">:</td>
					<td><?php echo $data['definisi']; ?></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>...</td>
				</tr>
				<tr>
					<td class="subtitle">Pengobatan</td>
					<td align="center">:</td>
					<td><?php echo $data['pengobatan']; ?></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>...</td>
				</tr>
				<tr>
					<td class="subtitle">Pencegahan</td>
					<td align="center">:</td>
					<td><?php echo $data['pencegahan']; ?></td>
				</tr>
				<tr>
					<td colspan="3">
						<hr color="#AAAAAA">
					</td>

				</tr>
				<tr>
				<tr>
					<td colspan="3" align="center"><input type="button" name="kembali" value="Kembali" onclick="javascript:history.go(-1)" /></td>
				</tr>
			</table>
		</div>
	<?php
	}
	?>






</div>
					