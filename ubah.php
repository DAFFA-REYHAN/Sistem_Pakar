<?php
    //Start session
    session_start();
    include 'koneksi_db.php';

    //Keamanan 
    if (!isset($_GET['act'])) {
        header("Location: lupa_pw.php");
    }

    //PROSES SIMPAN KATA SANDI BARU
    if (isset($_POST['tombol_tiga'])) {
        $username = $_SESSION['username'];
        $password = md5($_POST['password']);
        $cek = mysqli_query($conn, "UPDATE data_user SET password = '$password' WHERE username = '$username' ");
        if ($cek) {
            unset($_SESSION['username']);
            //atau
            session_destroy();
            echo "<script> 
                        alert('Password Berhasil Di Ubah!');
                        document.location.href = 'index.php';
                </script>";
        }
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
    </head>

    <body>
        <div class="row mx-0" style="margin-top: 120px;">
            <div class="col-6 offset-3">
                <div class="card w-100" style="width: 18rem;">
                    <div class="card-header pt-4 bg-white ">
                        <div class="row">
                            <div class="col-3 pt-1">
                                <a href="lupa_pw.php" class="fs-2"><i class="fas fa-arrow-left fa-lg"></i></a>
                            </div>
                            <div class="col-9 pl-4 ">
                                <h4 class="font-weight-bold">Buat Kata Sandi Baru</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body my-4">
                        <!-- PROSES AMBIL DATA -->
                        <?php
                            $username = $_SESSION['username'];
                            $qry = mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'");
                            $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_user WHERE username='$username'"));
                            if ($cek > 0) {
                                $data = mysqli_fetch_array($qry);
                            }
                        ?>
                        <!-- END PROSES AMBIL DATA -->
                        <form action="ubah.php?act='berhasil'" method="post" align="left" cellpadding="5">
                            <table align="center" cellpadding="5">
                                <tr>
                                    <td valign="top">Nama Pengguna</td>
                                    <td valign="top">:</td>
                                    <td valign="bottom">
                                        <input name="username" type="text" size="30" maxlength="30" value="<?php echo $data['username']; ?>" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">Kata Sandi Baru</td>
                                    <td valign="top">:</td>
                                    <td valign="bottom">
                                        <span id="sprypassword">
                                            <input name="password" type="password" id="passwordbaru" size="15" maxlength="30" />
                                        </span>
                                        <br>
                                        <span class="style2">Panjang minimal 6 karakter.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Konfirmasi Kata Sandi Baru</td>
                                    <td>:</td>
                                    <td>
                                        <span id="spryconfirm">
                                            <input name="passwordbaru2" type="password" size="15" maxlength="30" />
                                            <br>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            <div class="card-footer py-3 text-center">
                                <input class="btn text-white w-75 font-weight-bold" type="submit" name="tombol_tiga" value="Submit" />
                            </div>    
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
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />


        <script type="text/javascript">
            var sprytextfield09 = new Spry.Widget.ValidationTextField("sprytextfield09", "none", {
                minChars: 4,
                maxChars: 4,
                validateOn: ["blur"]
            });
            var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88", "nama", {
                validateOn: ["blur"]
            });
            var sprytextfield70 = new Spry.Widget.ValidationTextField("sprytextfield70", "data", {
                minChars: 5,
                validateOn: ["blur"]
            });
            var sprypassword = new Spry.Widget.ValidationPassword("sprypassword", {
                minChars: 6,
                validateOn: ["blur"]
            });
            var sprytextfield08 = new Spry.Widget.ValidationTextField("sprytextfield08", "nama", {
                validateOn: ["blur"]
            });
            var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword", {
                validateOn: ["blur"]
            });
        </script>
    </body>
</html>