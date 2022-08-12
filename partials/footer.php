<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<div class="py-5 mt-1" style="background-color: #23517f">
    <div class="container text-center text-white">
        © Copyright 2022
    </div>
</div>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.js"></script> -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: '<?php echo $_SESSION['sukses']; ?>',
            icon: 'success'
        });
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<?php if (@$_SESSION['gagal']) { ?>
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: '<?php echo $_SESSION['gagal']; ?>',
            icon: 'error'
        });
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['gagal']);
} ?>




</body>

</html>