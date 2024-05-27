<?php
include_once("./connect.php");

// Menangkap data yang dikirimkan di buku.php
$id = $_GET["id"];

$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["update"])) {
    $nama = $_POST["judul"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    // Query update buku
    $query = mysqli_query($db, "UPDATE buku SET judul='$nama', isbn='$isbn', jumlah_unit=$unit WHERE id=$id");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
</head>

<body>
    <h1>Form Edit Buku</h1>

    <form action="" method="POST">
        <label for="judul">Judul</label>
        <!-- Untuk menampilkan data sebelum di update -->
        <input value="<?php echo $buku['judul'] ?>" type="text" id="judul" name="judul">

        <br>
        <br>

        <label for="isbn">ISBN</label>
         <!-- Untuk menampilkan data sebelum di update -->
        <input value="<?php echo $buku['isbn'] ?>" type="text" id="isbn" name="isbn">

        <br>
        <br>

        <label for="unit">Jumlah Unit</label>
         <!-- Untuk menampilkan data sebelum di update -->
        <input value="<?php echo $buku['jumlah_unit'] ?>" type="number" id="unit" name="unit">

        <br>
        <br>
        <button type="update" name="update">UPDATE</button>
    </form>

    <br>
    <a href="./buku.php">Kembali</a>
</body>

</html>