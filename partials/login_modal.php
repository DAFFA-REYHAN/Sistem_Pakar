<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<!-- Modal -->
<div class="modal fade modal-centered" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100 font-weight-bold" id="LoginModalLabel">MASUK</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form action="login.php" method="post">
                    <div class="md-form mb-3">
                        <i class="fas fa-user"></i><label data-error="wrong" data-success="rigt" class="font-weight-bold ml-2">Nama Pengguna</label>
                        <input type="text" class="form-control validate" name="username" placeholder="Masukkan nama pengguna" required>

                    </div>
                    <div class="md-form mb-3">
                        <i class="fas fa-lock"></i> <label data-error="wrong" data-success="rigt" class="font-weight-bold ml-2">Kata Sandi</label>
                        <input type="password" class="form-control validate" name="password" placeholder="Masukkan kata sandi" required>

                    </div>
                    <div class="md-form mb-3 text-right mr-3">
                        <a href="lupa_pw.php">Lupa password ?</a>

                    </div>
                    <div class="md-form mb-2 text-right">
                        <button type="submit" class="btn btn-primary w-100 font-weight-bold"> Masuk</button>

                    </div>
                </form>
            </div>
            <div class=" text-center py-2">
                <p>Apakah anda sudah punya akun? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#registerModal" class="font-weight-bolder ml-1"> BUAT AKUN</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>