<<<<<<< HEAD

<div class="py-5 mt-1" style="background-color: #23517f">
    <div class="container text-center text-white" >
=======
<div class="footer py-5 mt-5" style="background-color: #23517f">
    <div class="container text-center text-white ">
>>>>>>> aaf4b93620e790733e08450909ca7be39ed0e707
        © Copyright 2022
    </div>
</div>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.js"></script> -->
<<<<<<< HEAD
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    
    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
=======
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


<!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
>>>>>>> aaf4b93620e790733e08450909ca7be39ed0e707
    di dalam session sukses  -->
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<?php if (@$_SESSION['gagal']) { ?>
    <script>
        swal("<?php echo $_SESSION['gagal']; ?>", "danger");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['gagal']);
} ?>

    
    

</body>

</html>