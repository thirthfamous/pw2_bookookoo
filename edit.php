<?php 
include_once 'utils/init.php';

if ( isset($_GET['id']) ){
    $id = $_GET['id'];
    
    if( isset($_POST['submit']) ){
        edit($_POST['nama'], $_POST['deskripsi'], $id);
    }    

}else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Id = <?= $_GET['id']?></title>
    <style>
        th {
            text-align: left;
            position: relative;
            width: 100px;
        }
        label {
            position: absolute;
            top: 0;
        }
        textarea {
            max-width: 170px !important;
        }
    </style>
</head>
<body>
    <form  method="post">
        <div class="wrp">
            <table>
                <tr>
                    <th><label for="nama">Nama</label></th>
                    <td><input type="text" name="nama" id="nama" value="<?= $_GET['nama']?>"></td>
                </tr>
                <tr>
                    <th><label for="deskripsi">Deskripsi</label></th>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $_GET['deskripsi']?></textarea></td>
                </tr>
                <tr>
                    <td>
                        <button name="submit">Edit Data !</button>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>