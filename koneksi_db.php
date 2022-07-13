<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "sispak";

$conn=mysqli_connect($host, $username, $password, $db) or die("Gagal koneksi..." . mysqli_error());
