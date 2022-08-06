<?php
//Start session
session_start();

if (!isset($_GET['act'])) {
    header("Location: lupa_pw.php");
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS -->
    <style>
        body {
            background-color: #F8F8F8;
        }

        .card {
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }

        .btn {
            background-color: #23517F;
        }

        .btn:hover {
            background-color: #23518E;
            transition: background-color .3s ease-in-out
        }

        i {
            padding: 8px;
            color: #23517F;

        }

        i:hover {
            background-color: #23517F;
            border-radius: 50%;
            color: white;
            transition: background-color .5s ease-out;
            transition: color .3s ease-out;
        }

        .footer>container>p {
            color: #888888;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <div class="row mx-0" style="margin-top: 120px;">
        <div class="col-6 offset-3">
            <div class="card w-100" style="width: 18rem;">

                <div class="row">
                    <div class="col-12 ml-4 mt-4">
                        <a href="lupa_pw.php" class="fs-2"><i class="fas fa-arrow-left fa-lg"></i></a>
                    </div>

                </div>


                <h5 class="text-success text-center fs-2">Jawab Pertanyaan Rahasia</h5>
                <div class="card-body mt-2 mb-4">
                    <!-- PROSES ANBIL DATA -->
                    <?php
                    include "koneksi_db.php";
                    if (isset($_POST['tombol'])) {
                        $username = $_SESSION['username'];
                        $jawaban = md5($_POST['jawaban']);
                        $query = mysqli_query($conn, "SELECT * FROM data_user WHERE username ='$username'");
                        $row = mysqli_fetch_assoc($query);
                        $data_jawaban = $row['jawaban'];

                        if ($jawaban == $data_jawaban) {
                            $tampil = "";
                            $warna = "success";
                            $pesan = "Jawaban Benar!";

                            header("Location: ubah.php?act=accubah");
                        } else {
                            $tampil = "";
                            $warna = "danger";

                            $pesan = "Jawaban Kurang Tepat!";
                        }
                    }

                    $username = $_SESSION['username'];
                    $status   = $_SESSION['status'];
                    if ($status == 'user') {

                        $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
                        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'"));
                    } else {
                        $qry = mysqli_query($conn, "SELECT * FROM data_pakar WHERE username='$username'");
                        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pakar WHERE username='$username'"));
                    }


                    if ($cek > 0) {
                        $data = mysqli_fetch_array($qry);
                    }


                    ?>
                    <!-- END PROSES AMBIL DATA -->
                    <!-- ALERT GAGAL-->
                    <?php if (!isset($_POST['tombol'])) {
                        $tampil = "hidden";
                    } ?>
                    <div class="alert alert-<?= $warna ?> alert-dismissible fade show auto-close" role="alert" <?= $tampil ?>>
                        <strong><?= $pesan ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- END ALERT -->

                    <form action="" method="post" align="left" cellpadding="5">
                        <input name="username" value="<?php echo $username; ?>" type="hidden" />
                        <input name="status" value="<?php echo $status; ?>" type="hidden" />
                        <table align="center" cellpadding="5">
                            <tr>
                                <td valign="top">Pertanyaan Rahasia</td>
                                <td valign="top">:</td>
                                <td valign="bottom"><?php echo $data['pertanyaan']; ?>
                            </tr>
                            </tr>
                            <tr>
                                <td valign="top">Jawaban Anda</td>
                                <td valign="top">:</td>
                                <td valign=""><span id="sprytextfield88">
                                        <input name="jawaban" type="text" size="30" maxlength="30">
                                        <br>
                                        <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Jawaban harus diisi.</span>
                                        <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
                                    </span></td>
                            </tr>
                            <tr>


                            </tr>


                        </table>




                </div>

                <div class="card-footer py-3 text-center">
                    <input class="btn text-white w-75 font-weight-bold" type="submit" name="tombol" value="Lanjutkan" />

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="footer py-4 fixed-bottom">
        <div class="container text-center text-secondary font-weight-bolder">
            <p> © Copyright 2022</p>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" /> -->
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        $(document).ready(function() {
            // Buat fungsi closeAlert()
            function closeAlert() {
                // Buat timer dengan javascript
                setInterval(function() { // fungsi ini akan dijalankan ketika timer selesai
                    $('.auto-close').fadeOut(500); // buat animasi slideup dengan waktu 200 miliseconds = 0.2 detik
                }, 4000); // set timer menjadi 3000 miliseconds = 3 detik
            }

            closeAlert(); // panggil fungsi closeAlert() untuk menutup alert
        });

        var sprytextfield70 = new Spry.Widget.ValidationTextField("sprytextfield88", "data", {
            minChars: 5,
            validateOn: ["blur"]
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>