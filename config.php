<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "sispak";

mysqli_connect($host, $username, $password) or die("Gagal koneksi...".mysqli_error());
mysqli_select_db($db) or die("Database tidak ditemukan...".mysqli_error());
