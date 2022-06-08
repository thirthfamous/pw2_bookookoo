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
    include 'utils/login.php';
        if (isset($_POST["username"]) && $_POST["username"]) {
            login();
        }


    ?>

</body>
</html>