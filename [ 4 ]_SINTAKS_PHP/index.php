<?php
// echo "YT : CallMeLeon ";
// print_r("HALO ADRIAN ");
// var_dump ("YT : CallMeLeon ");

// Penulisan sintaks PHP
// 1. PHP di dalam html
// 2. html di dalam PHP > penulisan yang ini tidak di sarankan

// Varibael dan Tipe Data 
// Varibael -> tidak boleh di awali dengan angka, tapi boleh mengandung angka
$nama = "Adrian";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h3> PHP DI DALAM HTML</h3>
    <h1>Halo, Selamat datang di <?php echo "PHP"?> </h1>
    <p><?php echo "INI ADALAH PARAGRAF" ?> </p>

    <h3> HTML DI DALAM PHP</h3>
    <?php 
    echo "<h1> Halo, INI h1 dengan PHP </h1>"
    ?>

    <h3>Ini Memanggil Variabel : <?php echo $nama; ?></h3>

</body>
</html>

<?php
// OPERATOR ARITMATIKA
$x = 10;
$y = 50;
echo $x - $y;
print"<br>";
?>

<?php 
// PENGGABUNGAN STRING
$namadepan = "adrian";
$namabelakang = "alfauzan";
echo $namadepan . " ". $namabelakang;
print"<br>";
?>

<?php
// OPERATOR ASSIGNMENT
$x = 1;
$x += 5;
echo $x;
print"<br>";
?>

<?php
// OPERATOR PERBANDINGAN
// <, >, <=, >=, ==
var_dump(1 < 5);
print"<br>";
var_dump(1 == "1"); // ini hanya mengecek nilainya sama atau tidak, bukan tipe datanya
print"<br>";
?>

<?php
// OPERATOR PERBANDINGAN
// <, >, <=, >=, ==
var_dump(1 === "1"); // ini untuk mengecek tipe datanya
print"<br>";
?>

<?php
// OPERATOR LOGIKA
// &&, || , !

$x = 10;
var_dump($x < 20 && $x %2 == 0);
print"<br>";
?>

<?php
// Penggunaan print_r
$siswa = array ('Alfa', 'Beta', 'Charlie');
print_r($siswa);
?>