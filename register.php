<?php
    if(isset($_SESSION["email"])){
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="./register_proccess.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">submit</button>
    </form>
</body>
</html>