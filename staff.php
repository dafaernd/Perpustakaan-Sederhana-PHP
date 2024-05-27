<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM staff");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>

    <!-- Menampilkan Data Staf -->
    <table border=1>
        <tr>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Email</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $staff) { ?>
        <tr>
            <td> <?php echo $staff["nama"]?> </td>
            <td> <?php echo $staff["telp"]?> </td>
            <td> <?php echo $staff["email"]?> </td>

            <td><a href=<?php echo "editStaff.php?id=" . $staff["id_staff"] ?>>EDIT</a></td>
            <td><a href=<?php echo "deleteStaff.php?id=" . $staff["id_staff"] ?>>HAPUS</a></td>
        </tr>
        <?php }?>
    </table>
    <!-- END -->
    <br>
    <a href="./tambahStaff.php">Tambah Staff</a>
    <br>
    <a href="./index.php">Kembali</a>
</body>
</html>