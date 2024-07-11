<?php
// membuat nilai nya terlebih dahulu
session_start();

$_SESSION["nama"] = "adrian musa alfauzan";
echo "Selamat datang, sekarang anda bisa masuk ke halaman2.php";
print_r($_SESSION["nama"]);

?>