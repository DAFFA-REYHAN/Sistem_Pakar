


	<?php
	require_once('otentifikasi.php');
	include("koneksi_db.php");
	$u = $_SESSION['SESS_USERNAME'];
	$act = isset($_GET['act']);


	# Fungsi hapus tabel tmp_gejala
	function AddTmpGejala($kode_gejala, $u, $status)
	{
		$sql_gejala = "INSERT INTO tmp_gejala (username,kode_gejala,status) VALUES ('$u','$kode_gejala','$status')";
		mysqli_query($GLOBALS['conn'], $sql_gejala) or die (mysqli_error($GLOBALS['conn']));
	}

	# Fungsi hapus tabel tmp_sakit
	function DelTmpSakit($u)
	{
		$sql_del = "DELETE FROM tmp_penyakit WHERE username='$u'";
		mysqli_query($GLOBALS['conn'], $sql_del) or die(mysqli_error($GLOBALS['conn']));
	}

	# Fungsi hapus tabel tmp_analisa
	function DelTmpAnlisa($u)
	{
		$sql_del = "DELETE FROM tmp_analisa WHERE username='$u'";
		mysqli_query($GLOBALS['conn'], $sql_del) or die(mysqli_error($GLOBALS['conn']));
	}

	function AddTmpAnalisa($kode_gejala, $u)
	{
		$sql_sakit = "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit 
				  WHERE relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit 
				  AND username='$u' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala";
		$qry_sakit = mysqli_query($GLOBALS['conn'], $sql_sakit) or die(mysqli_error($GLOBALS['conn']));
		while ($data_sakit = mysqli_fetch_array($qry_sakit)) {
			$sqltmp = "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala)
					VALUES ('$u','$data_sakit[kode_penyakit]','$data_sakit[kode_gejala]')";
			mysqli_query($GLOBALS['conn'], $sqltmp) or die(mysqli_error($GLOBALS['conn']));
		}
	}

	?>






<?php




if (isset($_POST['submit'])) {
	if (!empty($_POST['check_list'])) {
		// Counting number of checked checkboxes.
		$checked_count = count($_POST['check_list']);
		echo "You have selected following " . $checked_count . " option(s): <br/>";
		// Loop to store and display values of individual checked checkbox. (input analisa)
		foreach ($_POST['check_list'] as $selected) {
			echo "<p>" . $selected . "</p>";
			$sql_analisa = "SELECT * FROM tmp_analisa ";
			$qry_analisa = mysqli_query($GLOBALS['conn'], $sql_analisa) or die(mysqli_error($GLOBALS['conn']));
			$data_cek = mysqli_num_rows($qry_analisa);
			if ($data_cek >= 1) {
				# Kode saat tmp_analisa tidak kosong
				DelTmpSakit($u);
				$sql_tmp = "SELECT * FROM tmp_analisa WHERE kode_gejala='$selected' AND username='$u'";
				$qry_tmp = mysqli_query($GLOBALS['conn'], $sql_tmp) or die(mysqli_error($GLOBALS['conn']));
				while ($data_tmp = mysqli_fetch_array($qry_tmp)) {
					$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$data_tmp[kode_penyakit]' GROUP BY kode_penyakit";
					$qry_rsakit = mysqli_query($GLOBALS['conn'], $sql_rsakit) or die(mysqli_error($GLOBALS['conn']));
					while ($data_rsakit = mysqli_fetch_array($qry_rsakit)) {
						// Data penyakit yang mungkin dimasukkan ke tmp
						$sql_input = "INSERT INTO tmp_penyakit (username,kode_penyakit)	VALUES ('$u','$data_rsakit[kode_penyakit]')";
						mysqli_query($GLOBALS['conn'], $sql_input) or die(mysqli_error($GLOBALS['conn']));
					}
				}
				// Gunakan Fungsi
				DelTmpAnlisa($u);
				AddTmpAnalisa($selected, $u);
				$status = '1';
				AddTmpGejala($selected, $u, $status);
			} else {
				# Kode saat tmp_analisa kosong
				$sql_rgejala = "SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala='$selected'";
				$qry_rgejala = mysqli_query($GLOBALS['conn'], $sql_rgejala) or die(mysqli_error($GLOBALS['conn']));
				while ($data_rgejala = mysqli_fetch_array($qry_rgejala)) {
					$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$data_rgejala[kode_penyakit]' GROUP BY kode_penyakit";
					$qry_rsakit = mysqli_query($GLOBALS['conn'], $sql_rsakit) or die(mysqli_error($GLOBALS['conn']));
					while ($data_rsakit = mysqli_fetch_array($qry_rsakit)) {
						// Data penyakit yang mungkin dimasukkan ke tmp
						$sql_input = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_penyakit (username,kode_penyakit) VALUES ('$u','$data_rsakit[kode_penyakit]')") or die(mysqli_error($GLOBALS['conn']));
					}
				}
				// Menggunakan Fungsi
				AddTmpAnalisa($selected, $u);
				$status = '1';
				AddTmpGejala($selected, $u, $status);
			}
		}
	}
	#mencari hasil
	$sql_cekh = "SELECT * FROM tmp_penyakit WHERE username='$u' GROUP BY kode_penyakit";
	$qry_cekh = mysqli_query($GLOBALS['conn'], $sql_cekh) or die(mysqli_error($GLOBALS['conn']));
	$hsl_cekh = mysqli_num_rows($qry_cekh);
	$hsl_data = mysqli_fetch_array($qry_cekh);
	$cek_gejala_valid = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_gejala where status='1'"));
	$cek_gejala_penyakit = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit where relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit"));
	$hasilbobot = mysqli_query($GLOBALS['conn'], "SELECT bobot FROM relasi_penyakit_gejala, tmp_gejala WHERE kode_penyakit = '$hsl_data[kode_penyakit]' AND relasi_penyakit_gejala.kode_gejala = tmp_gejala.kode_gejala AND tmp_gejala.status =1") or die(mysqli_error($GLOBALS['conn']));
	$persentase = 0;
	while ($bobot = mysqli_fetch_array($hasilbobot)) {
		$persentase = $persentase + $bobot['bobot'];
	}




	/*
	$bobot = mysqli_fetch_array($hasilbobot);
	$jum = mysqli_num_rows($hasilbobot);
	$persentase = 0;
	for($i = 0; $i < $jum; ++$i){
		$persentase=$persentase + $bobot['bobot'];
	}
*/
	if ($persentase == 0) {
		$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
		$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
		$hsl_pasien = mysqli_fetch_array($qry_pasien);
		$sql_in = "INSERT INTO hasil_diagnosa SET username='$hsl_pasien[username]', kode_penyakit='', tanggal_diagnosa=NOW(), persentase='0'";
		mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));

		echo "<meta http-equiv=\"refresh\" content=\"0; url=hasil0.php?page=7&act=hasil0\">";
		exit;
	} else {
		$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
		$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
		$hsl_pasien = mysqli_fetch_array($qry_pasien);
		$sql_in = "INSERT INTO hasil_diagnosa SET username='$hsl_pasien[username]', kode_penyakit='$hsl_data[kode_penyakit]', tanggal_diagnosa=NOW(), persentase='$persentase'";
		mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));

		echo "<meta http-equiv=\"refresh\" content=\"0; url=hasil.php\">";
		exit;
	}

	echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
} //diagnosis
?>