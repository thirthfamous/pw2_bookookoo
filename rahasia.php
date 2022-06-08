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
    include 'utils/connection.php';
    session_start();

    if (isset($_SESSION["user"])) {


        // get data dari database berdasarkan form yang di input
        $query = "SELECT * FROM rahasia";
        $result = mysqli_query($connection, $query);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row ) {
            echo "Nama Rahasia : ".$row['nama']."<br>";
            echo "Deskripsi : ".$row['deskripsi']."<br>";
        }
    }
    
    ?>
</body>
</html>