<?php

include 'connection.php';

function login()
{
    // get data dari database berdasarkan form yang di input
    $query = "SELECT * FROM user WHERE username = \"".$_POST["username"]."\" AND password = \"".$_POST["password"]."\"";
    $result = mysqli_query($GLOBALS['connection'], $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // jika di database ada, maka munculkan bahwa login berhasil
    if ($rows == null) {
        // jika di database tidak ada, maka munculkan login gagal
        echo "Username atau Password salah !!!";
    } else {
        echo "Login Berhasil, Selamat Datang....";
        // insert ke session
        session_start();
        $_SESSION["user"] = $_POST["username"];
        header("Location: http://localhost/login_management/rahasia.php");
        die();
    }
}