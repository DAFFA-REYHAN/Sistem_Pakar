<?php
// require_once('otentifikasi.php');
?>

<script type="text/javascript">
	<!--
	function MM_jumpMenuBobot(targ, selObj, restore) { //v3.0
		eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
		if (restore) selObj.selectedIndex = 0;
	}
	//
	-->
</script>
<div class="text_area" align="justify">

	<br />
	<div class="title">Pengolahan Bobot Gejala</div>

	<form method="post" action="simpan_bobot.php">
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
					<select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenuBobot('parent',this,0)">
						<option value="?act=bobot">[ Daftar Penyakit ]</option>
						<?php
						$kode_penyakit = $_GET['kode_penyakit'];
						$qryp = mysqli_query($conn, "SELECT * FROM penyakit ORDER BY kode_penyakit ASC");
						while ($datap = mysqli_fetch_array($qryp)) {
							if ($datap['kode_penyakit'] == $kode_penyakit) {
								$cek = "selected";
							} else {
								$cek = "";
							}
							echo "<option value='?act=bobot&kode_penyakit=$datap[kode_penyakit]' $cek>$datap[nama_penyakit]</option>";
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
				<td class="subtitle"></td>
				<td class="subtitle">Bobot (%)</td>
			</tr>
			<?php

			$qry = mysqli_query($conn, "SELECT * FROM relasi_penyakit_gejala,gejala where relasi_penyakit_gejala.kode_penyakit='$kode_penyakit' AND relasi_penyakit_gejala.kode_gejala=gejala.kode_gejala ORDER BY gejala.kode_gejala ASC");
			$a = 0;
			while ($data = mysqli_fetch_array($qry)) {
				++$a;
			?>
				<tr>
					<td><input type="hidden" name="kode_gejala[]" value="<?php echo $data['kode_gejala'] ?>" /><?php echo "[" . $data['kode_gejala'] . "]&nbsp;" . $data['nama_gejala']; ?></td>
					<td>:</td>
					<td>
						<input name="bobot[]" type="text" size="2" maxlength="3" value="<?php echo $data['bobot']; ?>" />
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td colspan="3" class="subtitle">Total Jumlah Bobot Harus 100%</td>

			</tr>
			<tr>
				<td colspan="3">
					<hr color="#AAAAAA">
				</td>

			</tr>
			<tr>
				<td align="center" class="judul"><input class="btn btn-primary btn-lg active" type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data bobot gejala ini akan disimpan?')" />&nbsp;<input class="btn btn-primary btn-lg active" type="reset" value="Normalkan" /></td>
			</tr>
		</table>
	</form>
</div>