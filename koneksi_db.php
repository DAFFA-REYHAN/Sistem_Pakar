<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "sispak";
    $conn=mysqli_connect($host, $username, $password, $db) or die("Koneksi Gagal..." . mysqli_error());
?>