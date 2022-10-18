<?php
	/*session_start();
	require_once('otentifikasi.php');
	include("koneksi_db.php");

	$u = $_SESSION['SESS_USERNAME'];
	$act = isset($_GET['act']);

	if (isset($_POST['submit'])) {
		if (!empty($_POST['check_list'])) {
			// Counting number of checked checkboxes.
			$checked_count = count($_POST['check_list']);
			echo "Kamu telah memilih " . $checked_count . " gejala : <br/>";
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
					DelTmpAnalisa($u);
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
		# Mencari Hasil
		$sql_cekh = "SELECT * FROM tmp_penyakit WHERE username='$u' GROUP BY kode_penyakit";
		$qry_cekh = mysqli_query($GLOBALS['conn'], $sql_cekh) or die(mysqli_error($GLOBALS['conn']));
		$hsl_cekh = mysqli_num_rows($qry_cekh);
		$hsl_data = mysqli_fetch_array($qry_cekh);
		$cek_gejala_valid = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_gejala where status='1'"));
		$cek_gejala_penyakit = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala INNER JOIN tmp_penyakit ON tmp_penyakit.kode_penyakit = relasi_penyakit_gejala.kode_penyakit"));
		$hasilbobot = mysqli_query($GLOBALS['conn'], "SELECT bobot FROM relasi_penyakit_gejala INNER JOIN tmp_gejala ON tmp_gejala.kode_gejala = relasi_penyakit_gejala.kode_gejala WHERE kode_penyakit = '$hsl_data[kode_penyakit]' AND tmp_gejala.status =1") or die(mysqli_error($GLOBALS['conn']));
		$persentase = 0;
		while ($bobot = mysqli_fetch_array($hasilbobot)) {
			$persentase = $persentase + $bobot['bobot'];
		}

		mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
		mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
		mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");
		if ($persentase == 0) {
			$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
			$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
			$hsl_pasien = mysqli_fetch_array($qry_pasien);
			$sql_in = "INSERT INTO hasil_diagnosa SET username='$hsl_pasien[username]', kode_penyakit='', tanggal_diagnosa=NOW(), persentase='0'";
			mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil_kosong\">";
			exit;
		} else {
			$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
			$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
			$hsl_pasien = mysqli_fetch_array($qry_pasien);
			$sql_in = "INSERT INTO hasil_diagnosa SET username='$hsl_pasien[username]', kode_penyakit='$hsl_data[kode_penyakit]', tanggal_diagnosa=NOW(), persentase='$persentase'";
			mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil\">";
			exit;
		}
		echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
	}

	# Fungsi tambah tabel tmp_gejala
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
	function DelTmpAnalisa($u)
	{
		$sql_del = "DELETE FROM tmp_analisa WHERE username='$u'";
		mysqli_query($GLOBALS['conn'], $sql_del) or die(mysqli_error($GLOBALS['conn']));
	}

	# Fungsi tambah tabel tmp_analisa
	function AddTmpAnalisa($kode_gejala, $u)
	{
		$sql_sakit = "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala INNER JOIN tmp_penyakit ON tmp_penyakit.kode_penyakit = relasi_penyakit_gejala.kode_penyakit WHERE username='$u' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala";
		$qry_sakit = mysqli_query($GLOBALS['conn'], $sql_sakit) or die(mysqli_error($GLOBALS['conn']));
		while ($data_sakit = mysqli_fetch_array($qry_sakit)) {
			$sqltmp = "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala) VALUES ('$u','$data_sakit[kode_penyakit]','$data_sakit[kode_gejala]')";
			mysqli_query($GLOBALS['conn'], $sqltmp) or die(mysqli_error($GLOBALS['conn']));
		}
	}*/
?>

<?php
	/*session_start();
	require_once('otentifikasi.php');
	include("koneksi_db.php");

	$u = $_SESSION['SESS_USERNAME'];

	if (isset($_POST['submit'])) {
		if (!empty($_POST['check_list'])) {

			# Memastikan Table tmp_analisa kosong
			$qry_analisa = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa") or die(mysqli_error($GLOBALS['conn']));
			$data_cek_analisa = mysqli_num_rows($qry_analisa);
			if ($data_cek_analisa > 0) {
				mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
			}

			# Memastikan Table tmp_penyakit kosong
			$qry_penyakit = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit") or die(mysqli_error($GLOBALS['conn']));
			$data_cek_penyakit = mysqli_num_rows($qry_penyakit);
			if ($data_cek_penyakit > 0) {
				mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");
			}

			# Memastikan Table tmp_gejala kosong
			$qry_gejala = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_gejala") or die(mysqli_error($GLOBALS['conn']));
			$data_cek_gejala = mysqli_num_rows($qry_gejala);
			if ($data_cek_gejala > 0) {
				mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
			}

			$checked_count = count($_POST['check_list']);
			foreach ($_POST['check_list'] as $selected) {

				# Insert tmp_penyakit
				$query_satu = mysqli_query($GLOBALS['conn'], "SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala = '$selected'") or die(mysqli_error($GLOBALS['conn']));
				while ($data_satu = mysqli_fetch_array($query_satu)) {
					$query_empat = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit WHERE username = '$u' AND kode_penyakit = '$data_satu[kode_penyakit]'") or die(mysqli_error($GLOBALS['conn']));
					$data_empat = mysqli_num_rows($query_empat);
					if ($data_empat == 0) {
						$sql_satu = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_penyakit (username,kode_penyakit) VALUES ('$u','$data_satu[kode_penyakit]')") or die(mysqli_error($GLOBALS['conn']));
					}
				}

				# Insert tmp_analisa
				$query_dua = mysqli_query($GLOBALS['conn'], "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala INNER JOIN tmp_penyakit ON tmp_penyakit.kode_penyakit = relasi_penyakit_gejala.kode_penyakit WHERE tmp_penyakit.username = '$u' AND relasi_penyakit_gejala.kode_gejala = '$selected' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala") or die(mysqli_error($GLOBALS['conn']));
				while ($data_dua = mysqli_fetch_array($query_dua)) {
					$sql_dua = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala) VALUES ('$u','$data_dua[kode_penyakit]','$data_dua[kode_gejala]')") or die(mysqli_error($GLOBALS['conn']));
				}

				# Insert tmp_gejala
				$sql_tiga = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_gejala (username,kode_gejala,status) VALUES ('$u','$selected','1')") or die (mysqli_error($GLOBALS['conn']));
			}
		}

		# Mencari Hasil
		$kode_penyakit = '';
		$query_lima = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit WHERE username = '$u' GROUP BY kode_penyakit") or die(mysqli_error($GLOBALS['conn']));
		while ($data_lima = mysqli_fetch_array($query_lima)){
			$hasilbobot = mysqli_query($GLOBALS['conn'], "SELECT bobot FROM relasi_penyakit_gejala INNER JOIN tmp_gejala ON tmp_gejala.kode_gejala = relasi_penyakit_gejala.kode_gejala WHERE kode_penyakit = '$data_lima[kode_penyakit]' AND tmp_gejala.status = 1") or die(mysqli_error($GLOBALS['conn']));
			$persentase = 0;
			while ($bobot = mysqli_fetch_array($hasilbobot)) {
				$persentase = $persentase + $bobot['bobot'];
			}
			$kode_penyakit = $kode_penyakit . $data_lima['kode_penyakit'] . '/' . $persentase . '|';
		}

		mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
		mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
		mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");

		if ($kode_penyakit == '') {
			$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
			$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
			$hsl_pasien = mysqli_fetch_array($qry_pasien);
			$sql_in = "INSERT INTO hasil_diagnosa SET username = '$hsl_pasien[username]', kode_penyakit = '', tanggal_diagnosa = NOW(), persentase = '0'";
			mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil_kosong\">";
			exit;
		} else {
			$kode_penyakit = substr($kode_penyakit, 0, -1);
			$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
			$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
			$hsl_pasien = mysqli_fetch_array($qry_pasien);
			$sql_in = "INSERT INTO hasil_diagnosa SET username = '$hsl_pasien[username]', kode_penyakit = '$kode_penyakit', tanggal_diagnosa = NOW(), persentase = '0'";
			mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil\">";
			exit;
		}
		echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
	}*/
?>

<?php
	session_start();
	require_once('otentifikasi.php');
	include("koneksi_db.php");

	$u = $_SESSION['SESS_USERNAME'];

	if (isset($_POST['submit'])) {
		if (!empty($_POST['check_list'])) {

			$checked_count = count($_POST['check_list']);
			if ($checked_count > 9) {
				$_SESSION['gagal'] = "Maksimal Memilih 9 Gejala";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=diagnosa\">";
			}
			else {
				# Memastikan Table tmp_analisa kosong
				$qry_analisa = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa") or die(mysqli_error($GLOBALS['conn']));
				$data_cek_analisa = mysqli_num_rows($qry_analisa);
				if ($data_cek_analisa > 0) {
					mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
				}

				# Memastikan Table tmp_analisa_fuzzy kosong
				$qry_analisa_fuzzy = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa_fuzzy") or die(mysqli_error($GLOBALS['conn']));
				$data_cek_analisa_fuzzy = mysqli_num_rows($qry_analisa_fuzzy);
				if ($data_cek_analisa_fuzzy > 0) {
					mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa_fuzzy`");
				}

				# Memastikan Table tmp_penyakit kosong
				$qry_penyakit = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit") or die(mysqli_error($GLOBALS['conn']));
				$data_cek_penyakit = mysqli_num_rows($qry_penyakit);
				if ($data_cek_penyakit > 0) {
					mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");
				}

				# Memastikan Table tmp_gejala kosong
				/*$qry_gejala = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_gejala") or die(mysqli_error($GLOBALS['conn']));
				$data_cek_gejala = mysqli_num_rows($qry_gejala);
				if ($data_cek_gejala > 0) {
					mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
				}*/

				foreach ($_POST['check_list'] as $selected) {

					# Insert tmp_penyakit
					$query_satu = mysqli_query($GLOBALS['conn'], "SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala = '$selected'") or die(mysqli_error($GLOBALS['conn']));
					while ($data_satu = mysqli_fetch_array($query_satu)) {
						$query_empat = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit WHERE username = '$u' AND kode_penyakit = '$data_satu[kode_penyakit]'") or die(mysqli_error($GLOBALS['conn']));
						$data_empat = mysqli_num_rows($query_empat);
						if ($data_empat == 0) {
							$sql_satu = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_penyakit (username,kode_penyakit) VALUES ('$u','$data_satu[kode_penyakit]')") or die(mysqli_error($GLOBALS['conn']));
						}
					}

					# Insert tmp_analisa
					$query_dua = mysqli_query($GLOBALS['conn'], "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala INNER JOIN tmp_penyakit ON tmp_penyakit.kode_penyakit = relasi_penyakit_gejala.kode_penyakit WHERE tmp_penyakit.username = '$u' AND relasi_penyakit_gejala.kode_gejala = '$selected' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala") or die(mysqli_error($GLOBALS['conn']));
					while ($data_dua = mysqli_fetch_array($query_dua)) {
						$sql_dua = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_analisa (username,kode_penyakit,kode_gejala,bobot) VALUES ('$u','$data_dua[kode_penyakit]','$data_dua[kode_gejala]','$data_dua[bobot]')") or die(mysqli_error($GLOBALS['conn']));
					}

					# Insert tmp_gejala
					//$sql_tiga = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_gejala (username,kode_gejala) VALUES ('$u','$selected')") or die (mysqli_error($GLOBALS['conn']));
				}

				$query_lima = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_penyakit WHERE username = '$u' ORDER BY kode_penyakit ASC") or die(mysqli_error($GLOBALS['conn']));
				while ($data_lima = mysqli_fetch_array($query_lima)){
					/*$query_enam = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa WHERE kode_penyakit = '$data_lima[kode_penyakit]' ORDER BY bobot ASC LIMIT 1") or die(mysqli_error($GLOBALS['conn']));
					while ($data_enam = mysqli_fetch_array($query_enam)){
						$sql_empat = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_analisa_fuzzy (username,kode_penyakit,kode_gejala,bobot) VALUES ('$u','$data_enam[kode_penyakit]','$data_enam[kode_gejala]','$data_enam[bobot]')") or die(mysqli_error($GLOBALS['conn']));
					}*/

					$sum_bobot = 0;
					$sum_fuzzy = 0;
					$kd_penyakit = '';
					$query_enam = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa WHERE kode_penyakit = '$data_lima[kode_penyakit]'") or die(mysqli_error($GLOBALS['conn']));
					while ($data_enam = mysqli_fetch_array($query_enam)){
						$kd_penyakit = $data_enam['kode_penyakit'];
						$sum_bobot = $sum_bobot + $data_enam['bobot'];
					}
					$sum_fuzzy = ((($sum_bobot - 0.5) / 0.5) / $sum_bobot);
					$sql_empat = mysqli_query($GLOBALS['conn'], "INSERT INTO tmp_analisa_fuzzy (username,kode_penyakit,bobot) VALUES ('$u','$kd_penyakit',$sum_fuzzy)") or die(mysqli_error($GLOBALS['conn']));
				}

				# Mencari Hasil
				$kode_penyakit = '';
				$persentase = '';
				$query_tujuh = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa_fuzzy ORDER BY bobot DESC LIMIT 1") or die(mysqli_error($GLOBALS['conn']));
				while ($data_tujuh = mysqli_fetch_array($query_tujuh)){
					$kode_penyakit = $data_tujuh['kode_penyakit'];

					$query_select = mysqli_query($GLOBALS['conn'], "SELECT * FROM tmp_analisa WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($GLOBALS['conn']));
					$data_select = mysqli_num_rows($query_select);
					$query_sum = mysqli_query($GLOBALS['conn'], "SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($GLOBALS['conn']));
					$data_sum = mysqli_num_rows($query_sum);

					$persentase = ($data_select / $data_sum) * 100;
				}

				mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa`");
				mysqli_query($conn, "TRUNCATE TABLE `tmp_analisa_fuzzy`");
				//mysqli_query($conn, "TRUNCATE TABLE `tmp_gejala`");
				mysqli_query($conn, "TRUNCATE TABLE `tmp_penyakit`");

				if ($kode_penyakit == '') {
					$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
					$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
					$hsl_pasien = mysqli_fetch_array($qry_pasien);
					$sql_in = "INSERT INTO hasil_diagnosa SET username = '$hsl_pasien[username]', kode_penyakit = '', tanggal_diagnosa = NOW(), persentase = '0'";
					mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
					echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil_kosong\">";
					exit;
				} else {
					$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
					$qry_pasien = mysqli_query($GLOBALS['conn'], $sql_pasien);
					$hsl_pasien = mysqli_fetch_array($qry_pasien);
					$sql_in = "INSERT INTO hasil_diagnosa SET username = '$hsl_pasien[username]', kode_penyakit = '$kode_penyakit', tanggal_diagnosa = NOW(), persentase = '$persentase'";
					mysqli_query($GLOBALS['conn'], $sql_in) or die(mysqli_error($GLOBALS['conn']));
					echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=hasil\">";
					exit;
				}
				echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
			}
		}
		else {
			$_SESSION['gagal'] = "Silahkan Pilih Gejala Yang Tersedia";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index_user.php?act=diagnosa\">";
		}
	}
?>