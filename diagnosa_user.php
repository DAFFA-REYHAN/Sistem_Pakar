<div class="text_area" align="justify">
	<br>
	<div class="title">Diagnosa</div>
	<hr>
	<form action="proses_diagnosa.php" method="post">
		<B>Pilih Gejala Yang Anda Alami :</b><br><br>
		<div style="height:450px;width:100%;font:10px;overflow:scroll;">
			<table>
				<?php
					$qry = mysqli_query($conn, "SELECT * FROM gejala ORDER BY kode_gejala");
					while ($data = mysqli_fetch_array($qry)) {
				?>
						<tr style="padding-bottom: 3px;">
							<td>
								<input type="checkbox" name="check_list[]" value="<?php echo $data['kode_gejala']; ?>">
							</td>
							<td style="padding-left: 5px; padding-top:3px">
								<li style="list-style:none">
									<label><?php echo $data['nama_gejala']; ?></label>
								</li>
							</td>
						</tr>
				<?php 
					}
				?>
			</table>
		</div>
		<br>
		<center><input type="submit" name="submit" Value="Submit" /></center>
	</form>
</div>