<?php
    include_once("./connect.php");

    if(isset($_POST["update"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (NULL, '$nama', '$telp', '$email')");
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
    <h1>Form Tambah Staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telp">No Telp</label>
        <input type="text" id="telp" name="telp">

        <br>
        <br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <br>
        <br>
        <button type="update" name="update">UPDATE</button>
    </form>

    <br>
    <a href="./staff.php">Kembali</a>
</body>
</html>