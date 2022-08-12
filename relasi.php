
						<script type="text/javascript">
							<!--
							function MM_jumpMenu(targ, selObj, restore) { //v3.0
								eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
								if (restore) selObj.selectedIndex = 0;
							}
							//
							-->
						</script>
						


						
						
	<div class="text_area" align="justify">

<br />
<div class="title">Pengolahan Data Relasi</div>

<form method="post" action="relasi_simpan.php">
	<table width="100%" align="center" cellpadding="5">
		<tr>
			<td colspan="3">
				<hr color="#AAAAAA">
			</td>

		</tr>
		<tr>
			<td class="subtitle">Nama Penyakit</td>
		</tr>
		<tr>
			<td>
				<select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
					<option value="?act=relasi">[ Daftar Penyakit ]</option>
					<?php
					$kode_penyakit = $_GET['kode_penyakit'];
					$qryp = mysqli_query($conn, "SELECT * FROM penyakit ORDER BY kode_penyakit ASC");
					while ($datap = mysqli_fetch_array($qryp)) {
						if ($datap['kode_penyakit'] == $kode_penyakit) {
							$cek = "selected";
						} else {
							$cek = "";
						}
						echo "<option value='?act=relasi&kode_penyakit=$datap[kode_penyakit]' $cek>$datap[nama_penyakit]</option>";
					}
					?>
				</select>
				<input type="hidden" name="kode_penyakit" value="<?php echo $kode_penyakit; ?>" />
			</td>
		</tr>
		<br>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3">
				<hr color="#AAAAAA">
			</td>

		</tr>
		<tr>
			<td class="subtitle">Daftar Gejala</td>
		</tr>
		<?php
		$no = 0;
		$qry = mysqli_query($conn, "SELECT * FROM gejala ORDER BY kode_gejala");
		while ($data = mysqli_fetch_array($qry)) {
			$no++;
			$qryr = mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$data[kode_gejala]'");
			$cocok = mysqli_num_rows($qryr);
			if ($cocok == 1) {
				$cek = "checked";
			} else {
				$cek = "";
			}
		?>
			<tr>
				<td><input type="checkbox" name="cekgejala[]" value="<?php echo $data['kode_gejala']; ?>" <?php echo $cek; ?> />&nbsp;<?php echo "[" . $data['kode_gejala'] . "]&nbsp;" . $data['nama_gejala']; ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3">
				<hr color="#AAAAAA">
			</td>

		</tr>
		<tr>
			<td align="center" class="judul"><input class="btn btn-primary btn-lg active" type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data relasi ini akan disimpan?')" />&nbsp;<input class="btn btn-primary btn-lg active" type="reset" value="Normalkan" /></td>
		</tr>
	</table>
</form>
</div>

	