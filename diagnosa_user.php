<?php
$u = $_SESSION['SESS_USERNAME'];
$act = isset($_GET['act']);


# Fungsi hapus tabel tmp_gejala
function AddTmpGejala($kode_gejala, $u, $status)
{
	$sql_gejala = "INSERT INTO tmp_gejala (username,kode_gejala,status) VALUES ('$u','$kode_gejala','$status')";
	mysqli_query($conn, $sql_gejala) or die(mysqli_error());
}

# Fungsi hapus tabel tmp_sakit
function DelTmpSakit($u)
{
	$sql_del = "DELETE FROM tmp_penyakit WHERE username='$u'";
	mysqli_query($conn, $sql_del) or die(mysqli_error());
}

# Fungsi hapus tabel tmp_analisa
function DelTmpAnlisa($u)
{
	$sql_del = "DELETE FROM tmp_analisa WHERE username='$u'";
	mysqli_query($conn, $sql_del) or die(mysqli_error());
}

function AddTmpAnalisa($kode_gejala, $u)
{
	$sql_sakit = "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit 
				  WHERE relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit 
				  AND username='$u' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala";
	$qry_sakit = mysqli_query($conn, $sql_sakit) or die(mysqli_error());
	while ($data_sakit = mysqli_fetch_array($qry_sakit)) {
		$sqltmp = "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala)
					VALUES ('$u','$data_sakit[kode_penyakit]','$data_sakit[kode_gejala]')";
		mysqli_query($conn, $sqltmp) or die(mysqli_error());
	}
}

?>


<div class="text_area" align="justify">
	<br>
	<div class="title">Diagnosa</div>
	<hr>
	<form action="proses_diagnosa.php" method="post">
		<B>Pilih Gejala yang anda alami :</b><br><br>
		<div style="height:450px;width:100%;font:10px;overflow:scroll;">
			<table>
				<?php
				$qry = mysqli_query($conn, "SELECT * FROM gejala ORDER BY kode_gejala");
				while ($data = mysqli_fetch_array($qry)) {
				?>

					<tr style="padding-bottom: 3px;">
						<td><input type="checkbox" name="check_list[]" value="<?php echo $data['kode_gejala']; ?>"></td>
						<td style="padding-left: 5px; padding-top:3px">

							<li style="list-style:none"><label><?php echo $data['nama_gejala']; ?></label></li>

						</td>

					</tr>

				<?php } ?>
			</table>
		</div><br>
		<center><input type="submit" name="submit" Value="Submit" /></center>

	</form>












</div>