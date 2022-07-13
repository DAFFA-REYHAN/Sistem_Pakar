<?php
require('fpdf16\fpdf.php');

//Connect to your database
include("koneksi_db.php");

class PDF extends FPDF
{
    //Page header
    function Header()
    {
        //Logo
        $this->Image('images/doctor2.jpg', 10, 8, 33);
        //Arial bold 15
        $this->SetFont('Arial', 'B', 15);

        //Line break
        $this->Ln(10);
        //Move to the right
        $this->Cell(80);
        //Title
        $this->Cell(20, 10, 'Hasil Diagnosa', 0, 0, 'C');
        //Line break
        $this->Ln(20);
    }
}
$ip = $_SERVER['REMOTE_ADDR'];
$qry = mysqli_query($conn, "SELECT * FROM hasil_diagnosa, penyakit WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND hasil_diagnosa.ip='$ip' ORDER BY hasil_diagnosa.id_diagnosa DESC LIMIT 1");
$data = mysqli_fetch_array($qry);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->Ln(10);
$pdf->Cell(25);
$pdf->Cell(0, 10, 'Data Anak', 0, 1);
$pdf->Ln(5);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Nama Anak        : ' . $data['nama_user'], 0, 1);

$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Usia                   :' . $data['usia'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Jenis Kelamin    :' . $data['jenis_kelamin'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Alamat               :' . $data['alamat'], 0, 1);
$pdf->Ln(10);
$pdf->Cell(25);
$pdf->Cell(0, 10, 'Hasil Diagnosa', 0, 1);
$pdf->Ln(5);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Persentase           :' . $data['persentase'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Penyakit               :' . $data['nama_penyakit'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Gejala                   :' . $data['nama_user'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Definisi                :' . $data['definisi'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Pengobatan           :' . $data['pengobatan'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Pencegahan           :' . $data['pencegahan'], 0, 1);
$pdf->Ln(3);
$pdf->Cell(20);
$pdf->Cell(0, 10, 'Waktu Diagnosa    :' . $data['tanggal_diagnosa'], 0, 1);
$pdf->Output();
