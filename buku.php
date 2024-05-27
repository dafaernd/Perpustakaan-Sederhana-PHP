<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <!-- Menampilkan Data Pada Tabel Buku -->
    <table border=1>
        <tr>
            <td>Judul</td>
            <td>ISBN</td>
            <td>Jumlah Unit</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $buku) { ?>
        <tr>
            <td> <?php echo $buku["judul"]?> </td>
            <td> <?php echo $buku["isbn"]?> </td>
            <td> <?php echo $buku["jumlah_unit"]?> </td>

            <td><a href=<?php echo "editBuku.php?id=" . $buku["id"] ?>>EDIT</a></td>
            <td><a href=<?php echo "deleteBuku.php?id=" . $buku["id"] ?>>HAPUS</a></td>
        </tr>
        <?php }?>
    </table>
    <!-- END -->
        <br>
    <a href="./tambahBuku.php">Tambah Buku</a>
        <br>
    <a href="./index.php">Kembali</a>
</body>
</html>