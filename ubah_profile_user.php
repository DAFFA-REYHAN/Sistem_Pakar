
			<?php
			$qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
			$data = mysqli_fetch_array($qry);
			?>

			<br>
			<form action="" method="post" align="left" cellpadding="5">
				<table>
					<tr>
						<td>Nama </td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="2"><span id="sprytextfield4912">
								<input name="nama_user" type="text" size="30" maxlength="30" value="<?= $data['nama_user']; ?>">
								<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Anda harus diisi.</span>
								<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 2 karakter.</span>
								<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span></span></td>
					</tr>
					<tr>
						<td valign="top">Usia</td>
						<td valign="top">:</td>
					</tr>
					<tr>
						<td colspan="2"><span id="sprytextfield592">
								<input name="usia" type="text" size="30" maxlength="30" value="<?= $data['usia'] ?>">
								<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Usia Anda harus diisi.</span>
								<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="2"><select name="jenis_kelamin">
								<option value="#">Pilih Jenis Kelamin</option>
								<option value="L" <?php if ($data['jenis_kelamin'] == 'L') echo "selected" ?>>Laki-laki</option>
								<option value="P" <?php if ($data['jenis_kelamin'] == 'P') echo "selected" ?>>Perempuan</option>
							</select></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="2"><span id="sprytextfield696">
								<input name="alamat" type="text" value="<?= $data['alamat']; ?>" />
								<span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Alamat harus diisi.</span>
								<span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 4 karakter.</span>
								<span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
							</span></td>
					</tr>


					<tr>
						<td>Validasi</td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="g-recaptcha" data-sitekey="6LcEVPUgAAAAAFLhguztcrcslhUU6-uuZYkau_No"></div>
						</td>

					</tr>
					
					<tr>
						<td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol-profil" value="Simpan" />
							<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
						</td>
					</tr>
				</table>
			</form>

			

