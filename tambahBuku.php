<?php
    include_once("./connect.php");

    // Inser data kedalam database, dengan mengambil data dari form
    if(isset($_POST["update"])){
        $nama = $_POST["judul"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (NULL, '$nama', '$isbn', $unit)");
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <h1>Form Tambah Buku</h1>

    <!-- FORM PENGISIAN BUKU BARU -->
    <form action="" method="POST">
        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul">

        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">

        <br>
        <br>

        <label for="unit">Jumlah Unit</label>
        <input type="number" id="unit" name="unit">

        <br>
        <br>
        <button type="update" name="update">UPDATE</button>
    </form>
    <!-- FORM END -->

    <br>
    <a href="./buku.php">Kembali</a>
</body>
</html>