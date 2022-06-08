<?php 
include_once 'utils/init.php'; 

if( !isset($_SESSION['user']) ){
    header("Location: login.php");
}
// mengambil data rahasia
showRahasia();

// menambah data rahasia
if( isset($_POST['tambah']) ){
    create($_POST["nama"], $_POST["deskripsi"]);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahasia</title>
</head>
<body>

   <div class="container">
        <div class="menu">
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>

        <div class="content tambah">
            <!-- judul -->
            <div class="title">
                <h3>Tambah Rahasia</h3>
            </div>

            
            <form action="" method="post">
                <div class="input-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="input-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi">
                </div>
                <button type="submit" name="tambah" class="btn">Tambah</button>
            </form>


        </div>
   </div>

    <!-- show Rahasisa data -->
    <!-- karena php dieksekusi terakhir jadi tampil data dibawah -->

</body>
</html>