<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

<div class="panel panel-success">
    <div class="panel-body">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .style2 {
                font-size: small;
                font-style: italic;
                color: #333333;
            }
        </style>
    </div>
</div>


<!-- Modal -->
<div class="modal  fade modal-centered" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100 font-weight-bold" id="registerModalLabel">BUAT AKUN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="col-12 ">
                    <form action="proses_registrasi.php" method="post">
                        <center>
                            <table>
                                <tr>
                                    <td valign="top">Nama Pengguna</td>
                                    <td valign="top">:</td>
                                    <td valign="bottom"><span id="sprytextfield7">
                                            <input name="username" type="text" size="40" maxlength="30" />
                                            <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Username Harus Diisi.</span>
                                            <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 5 karakter.</span>
                                            <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan tanpa spasi.</span>
                                            <br>
                                            <p class="style2 text-primary">*Panjang minimal 5 karakter.</p>

                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">Kata Sandi</td>
                                    <td valign="top">:</td>
                                    <td valign="bottom"><span id="sprypassword">
                                            <input name="password" type="password" id="password" size="25" maxlength="30" />
                                            <span class="passwordRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Password Harus Diisi.</span>
                                            <span class="passwordMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 6 karakter.</span></span>
                                        <br>
                                        <p class="style2 text-primary "> *Panjang minimal 6 karakter.</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Konfirmasi Kata Sandi</td>
                                    <td>:</td>
                                    <td><span id="spryconfirm">
                                            <input name="password2" type="password" size="25" maxlength="30" />
                                            <span class="confirmRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Konfirmasi Password Harus Diisi.</span>
                                            <span class="confirmInvalidMsg"><img src="gambar/hapus.png" width="10" height="10"> Kata Sandi Harus Cocok.</span></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr color="#AAAAAA">
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="subtitle font-weight-bold mb-3 ">Biodata</div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><span id="sprytextfield4">
                                            <input name="nama_user" type="text" size="30" maxlength="30">
                                            <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Nama Anda harus diisi.</span>
                                            <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Panjang minimal 2 karakter.</span>
                                            <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span></span></td>
                                </tr>
                                <tr>
                                    <td valign="top">Usia</td>
                                    <td valign="top">:</td>
                                    <td><span id="sprytextfield5">
                                            <input name="usia" type="text" size="30" maxlength="30">
                                            <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Usia Anda harus diisi.</span>
                                            <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><select name="jenis_kelamin">
                                            <option value="#">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><span id="sprytextfield6">
                                            <input name="alamat" type="text" size="50" maxlength="100" />
                                            <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Alamat harus diisi.</span>
                                            <span class="textfieldMinCharsMsg"><img src="gambar/hapus.png" width="10" height="10"> Minimal 4 karakter.</span>
                                            <span class="textfieldInvalidFormatMsg"><img src="gambar/hapus.png" width="10" height="10"> Format penulisan salah.</span>
                                        </span></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr color="#AAAAAA">
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="subtitle font-weight-bold mb-3 ">Jika Anda Lupa Kata Sandi</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pilih Pertanyaan Rahasia</td>
                                    <td>:</td>
                                    <td><select name="pertanyaan" id="pertanyaan">
                                            <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
                                            <option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
                                            <option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
                                            <option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
                                            <option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
                                            <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Jawaban Anda</td>
                                    <td>:</td>
                                    <td><span id="sprytextfield88">
                                            <input name="jawaban" type="text" size="30" maxlength="30">
                                            <span class="textfieldRequiredMsg"><img src="gambar/hapus.png" width="10" height="10"> Jawaban harus diisi.</span>
                                        </span></td>
                                </tr>
                                <tr>
                                    <td>Validasi</td>
                                    <td>:</td>
                                    <td>
                                        <div class="g-recaptcha mt-5" data-sitekey="6LcEVPUgAAAAAFLhguztcrcslhUU6-uuZYkau_No"></div>
                                    </td>
                                </tr>
                            </table>
                        </center>
                        <input class="btn btn-primary w-100 mt-5 font-weight-bolder" type="submit" name="tombol" value="Daftar" />
                    </form>
                </div>
            </div>

            <div class="text-center py-2">
                <hr>
                <p>Apakah anda sudah punya akun? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#LoginModal" class="font-weight-bolder ml-1"> MASUK</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "data", {
        minChars: 5,
        validateOn: ["blur"]
    });
    var sprypassword = new Spry.Widget.ValidationPassword("sprypassword", {
        minChars: 6,
        validateOn: ["blur"]
    });
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {
        minChars: 5,
        validateOn: ["blur"]
    });
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "nama", {
        minChars: 2,
        validateOn: ["blur"]
    });
    var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {
        validateOn: ["blur"]
    });
    var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "alamat", {
        minChars: 4,
        validateOn: ["blur"]
    });
    var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88", "nama", {
        validateOn: ["blur"]
    });
    var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword", {
        validateOn: ["blur"]
    });
    var validsel = new Spry.Widget.ValidationSelect("validsel", {
        validateOn: ["blur"]
    });
    //
</script>