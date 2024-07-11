<?php
session_start();
require 'function.php';

// Cek Cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan id
    $result = mysqli_query($db,"SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Cek cookie dan username
    if($key === hash('sha256', $row['username'])){ // Perbaikan: Mengubah '$username' menjadi 'username'
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: index2.php"); // Perbaikan: Menghapus spasi setelah "Location:"
    exit;
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result= mysqli_query($db,"SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){
        // Cek password
        $row = mysqli_fetch_assoc($result); 

        // password_verify ==> mengecek sebuah string, apakah sama dengan sebuah hash nya?
        // jika sama maka passwordnya benar.
        // Parameternya ada 2 : string yang belum di acak dan string yang sudah di acak.
        if(password_verify($password, $row["password"])){
            // Set session
            $_SESSION["login"] = true;

            // Check Remember Me
            if(isset($_POST['remember'])){
                // Buat Cookie
                setcookie('id', $row['id'], time() + 10);
                setcookie('key', hash('sha256', $row['username']), time() + 10);
            }
            header("Location: index2.php"); // Perbaikan: Menghapus spasi setelah "Location:"
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error) ) : ?>
        <p style="color:red; font-style:italic;">Username / Password salah!</p>
    <?php endif; ?>
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
                <label for="remember">Remember Me </label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login"> Login </button>
            </li>
        </ul>
    </form>
</body>
</html>
