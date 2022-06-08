<?php

// munculkan data rahasia
// koneksi ke database
$host = 'localhost:3306';
$username = 'root';
$password = '';
$db = 'login_php';
$connection = mysqli_connect($host, $username, $password, $db);
if (!$connection){ // jika koneksi ke db gagal
    die('tidak bisa konek ke db '. mysql_error);
}