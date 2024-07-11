<?php 
// array --> sebuah variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// definisi array --> pasangan antara key dan value
// key - nya adalah index yang dimulai dari 0
//Membuat array

// [+] cara lama
$hari = array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
var_dump($hari) ;
echo "<br>";
echo "<br>";
// [+] cara baru
$bulan = ["Januari","Februari","Maret"];
var_dump($bulan) ;
echo "<br>";
echo "<br>";
// [+] cara ini dapat menggabung semua tipe data
// bisa string, int, boolean dll, berbeda dengan bahasa pemrograman lainnya! 
// mereka harus memiliki tipe data yang sama! 
$arr1 = [123, "ketik", false];
var_dump($arr1) ;
echo "<br>";
echo "<br>";

// [+] Menampilkan Array di PHP
// gunakan var_dump() / print_r()
// var_dump ($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// [+] Menampilkan 1 elemen pada array
// echo $bulan[1];
// echo "<br>";
// echo $arr1[0];

// [+] Menambahkan elemen baru pada array
$hari[] = "New Hari";
$hari[] = "New Hari ke 2";
$hari[] = "New Hari ke 3";
var_dump($hari);

?>