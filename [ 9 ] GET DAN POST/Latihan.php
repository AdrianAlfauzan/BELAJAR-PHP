<?php
// $_GET
// MENAMPILKAN DENGAN CODE
// $_GET["NAMA"] = "ADRIAN MUSA ALFAUZAN";
// $_GET["NIM"] = "3411221020";

// var_dump($_GET);

// MENAMPILKAN DENGAN URL
// tambah symbol "?"
// ? --> Sekarang saya ingin memasukkan data ke halaman ini
// lalu, ? ditambah dengan "key" dan "value"
// Contoh ?nama=adrian

// jika ingin menambahkan, tambahkan symbol "&"
// Contoh ?nama=adrian&nim=3411221020
http://localhost/BELAJAR_PHP/%5b%209%20%5d%20GET%20DAN%20POST/Latihan.php?nama=adrian&nim=3411221020

$mahasiswa = [
    [
    "NAMA" => "Adrian Musa", 
    "NIM" => "3411221020",
    "JURUSAN" => "Tehnik Informatika",
    "EMAIL" => "Stalker@gmail.com",
    "TUGAS" => [90,80,100],
    "GAMBAR" => "Python.png"

    ],
    [
    "NAMA" => "Leonardo Dicaprio", 
    "NIM" => "3411221030",
    "JURUSAN" => "Tehnik Informatika",
    "EMAIL" => "Haacks@gmail.com",
    "TUGAS" => [90,80,100],
    "GAMBAR" => "C.png"
    ]

];// ini array associative
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="Latihan2.php?nama=<?php echo $mhs["NAMA"];?> &nim=<?php echo $mhs["NIM"];?> &jurusan=<?php echo $mhs["JURUSAN"];?> &email=<?php echo $mhs["EMAIL"];?> &tugas=<?php echo $mhs["TUGAS"][2];?> &gambar=<?php echo $mhs["GAMBAR"];?>">
                    <!-- Mengambil Output dari Value NAMA : -->
                    <?php echo $mhs["NAMA"], "ss";?>
                    <!-- Output : Adrian Musa , Leonardo Dicaprio -->
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>