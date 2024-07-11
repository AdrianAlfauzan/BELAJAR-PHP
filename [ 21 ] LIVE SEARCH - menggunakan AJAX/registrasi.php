<?php
require 'function.php';


if( isset($_POST["registrasi"]) ){
    if(registrasi($_POST) > 0 ){
        echo "<script>
                alert('user baru berhasil ditambahkan');
                </script>";
    } else{
        echo mysqli_error($db);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="confirmpassword">confirm password : </label>
                <input type="password" name="confirmpassword" id="confirmpassword">
            </li>
            <li>
                <button type="submit" name="registrasi"> Registrasi </button>
            </li>
        </ul>
    </form>
</body>
</html>