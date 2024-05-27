<?php
    include_once("./connect.php");

    $id =$_GET["id"];

    $query = mysqli_query($db, "DELETE FROM staff WHERE id_staff=$id");

    header("Location: staff.php");