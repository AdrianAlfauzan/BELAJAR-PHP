<?php
// Informasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

// Membuat koneksi ke database
$db = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil atau tidak
if (!$db) {
    // Penanganan kesalahan dengan lebih baik
    $error_message = mysqli_connect_error();
    // Catat pesan kesalahan ke dalam log atau tampilkan pesan yang lebih deskriptif
    die("Koneksi gagal: " . $error_message);
}
?>
