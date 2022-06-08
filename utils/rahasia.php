<?php
include_once 'connection.php';

function showRahasia()
{
    // get data dari database berdasarkan form yang di input
    $query = "SELECT * FROM rahasia";
    $result = mysqli_query($GLOBALS['connection'], $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo '<table border="1">';
    echo    "<tr>";
    echo        "<th>ID</th>";
    echo        "<th>Nama</th>";
    echo        "<th>Deskripsi</th>";
    echo        "<th>Action</th>";
    echo    "</tr>";
    foreach ($rows as $row ) {
        echo "<tr>";
        echo "<td> ".$row['id']." </td>";
        echo "<td> ".$row['nama']." </td>";
        echo "<td> ".$row['deskripsi']." </td>";
        echo "<td> <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo `</table>`;
}

function create($nama, $deskripsi)
{
    $queryInsertRahasia = "INSERT INTO rahasia(nama, deskripsi) VALUES ('".$nama."', '".$deskripsi."')";

    if (mysqli_query($GLOBALS['connection'], $queryInsertRahasia)) {
        header("Refresh:0");
    } else {
        echo mysqli_error($GLOBALS['connection']);
    }
}

function delete($id)
{
    $queryDeleteRahasia = "DELETE FROM rahasia WHERE id = ".$id;

    if (mysqli_query($GLOBALS['connection'], $queryDeleteRahasia)) {
        header("Location: http://localhost/login_management/rahasia.php");
    } else {
        echo mysqli_error($GLOBALS['connection']);
    }
}