<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahasia</title>
</head>
<body>
    <?php
    include_once 'utils/rahasia.php'; 
    session_start();

    if (isset($_SESSION["user"])) {
        showRahasia();
    }
    
    ?>
    <br>
    ============================================================================== <br>
    <h3>Tambah Rahasia</h3>
    <form action="" method="post">
        Nama Rahasia : <input type="text" name="nama" id="nama"> <br>
        Deskripsi : <input type="text" name="deskripsi" id="nama"> <br>
        <button type="submit">Tambah</button>
    </form>

    <?php
        if (isset($_POST["nama"]) && $_POST["deskripsi"]) {
            create($_POST["nama"], $_POST["deskripsi"]);
        }
    ?>

    <br>
    ============================================================================== <br>
    <a href="logout.php">Logout</a>
</body>
</html>