<?php
include_once 'utils/init.php'; 

if( isset($_SESSION['user']) ){
    header("Location: rahasia.php");
    exit;
}

// jika tombol login ditekan.
if (isset($_POST['login'])) {
    login();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
</head>
<body>

<div class="login">
    
    <div class="form">
        <h3>Login</h3>
        <form action="" method="post">
            <div class="input-group">
                <label for="username">Username </label><input type="text" name="username" id="username"> <br>
            </div>
            <div class="input-group">
                <label for="password">Password</label><input type="password" name="password" id="password"> <br>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
        </form>
    </div>

</div>

</body>
</html>