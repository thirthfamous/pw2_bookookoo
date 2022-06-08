<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
</head>
<body>
    <h3>Login</h3>
    <form action="" method="post">
        Username : <input type="text" name="username" id="username"> <br>
        Password : <input type="password" name="password" id="password"> <br>
        <button type="submit">Login</button>
    </form>


    <?php 
        if (isset($_POST["username"]) && $_POST["username"]) {
            // koneksi ke database
            $host = 'localhost:3306';
            $username = 'root';
            $password = '';
            $db = 'login_php';
            $connection = mysqli_connect($host, $username, $password, $db);
            if (!$connection){ // jika koneksi ke db gagal
                die('tidak bisa konek ke db '. mysql_error);
            }

            // get data dari database berdasarkan form yang di input
            $query = "SELECT * FROM user WHERE username = \"".$_POST["username"]."\" AND password = \"".$_POST["password"]."\"";
            $result = mysqli_query($connection, $query);

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


    ?>

</body>
</html>