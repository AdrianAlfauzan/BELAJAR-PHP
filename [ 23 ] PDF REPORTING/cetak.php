<?php

// Memuat autoloader dari Composer
require_once 'C:\xampp\htdocs\BELAJAR_PHP\[ 23 ] PDF REPORTING\vendor\autoload.php';

// Membuat objek Mpdf
$mpdf = new \Mpdf\Mpdf();

// Menambahkan konten HTML ke PDF
$mpdf->WriteHTML('<h1>Hello world!</h1>');

// Output PDF ke browser atau file
$mpdf->Output();
?>
