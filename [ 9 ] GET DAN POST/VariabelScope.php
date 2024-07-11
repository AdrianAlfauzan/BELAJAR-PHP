<?php
// Variabel Scope / Lingkup variabel

$x = 10;

function hasil(){
    // Beri keyword bernama "global" untuk mengakses variabel di luar function
    // $x = 20; //berlaku hanya memanggil di dalam function

    global $x; // ini berfungsi untuk mengambil variabel diluar function
    echo $x;
}
hasil(); // berlaku hanya memanggil di dalam function
echo "<br>";
echo $x; // untuk variabel diluar function
?>