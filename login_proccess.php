<?php

session_start();
include_once("./connect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {

        //jika email ditemukan maka, cek password.
        $user = mysqli_fetch_assoc($result);

        //mencocokan input password dengan hash password
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            //pindahkan lokasi ke index.php
            header('Location: index.php');
            exit;
        } else {
            echo "Password salah";
        }
    } else {
        echo "Email belum terdaftar";
    }
} 

?>