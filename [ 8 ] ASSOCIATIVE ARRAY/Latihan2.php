<?php
// $mahasiswa = [
//     ["Adrian", "3411221020", "Tehnik Informatika", "Stalker@gmail.com"],
//     ["Musa", "3411221030", "Tehnik Informatika", "Hacks@gmail.com"],
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li> Nama :
            <?php echo $mhs["NAMA"]; ?>
        </li>
        <li> NIM :
            <?php echo $mhs["NIM"]; ?>
        </li>
        <li> JURUSAN :
            <?php echo $mhs["JURUSAN"]; ?>
        </li>
        <li> EMAIL :
            <?php echo $mhs["EMAIL"]; ?>
        </li>
        <li> EMAIL :
            <?php echo $mhs["TUGAS"][0]; ?>
        </li>
        <li>
            <img src="Image/<?php echo $mhs["GAMBAR"] ?>" width="25" alt="">
        </li>
    </ul>
    <?php endforeach; ?>

</body>

</html>