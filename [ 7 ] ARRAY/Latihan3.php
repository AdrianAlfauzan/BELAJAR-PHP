<?php
// Array 1 dimensi
// $mahasiswa = ["Adrian","3411221020", "Tehnik Informatika", "Email"];

// Array 2 dimensi / Multidimensi
$mahasiswa = [
    ["Adrian","3411221020", "Tehnik Informatika", "Stalker@gmail.com"],
    ["Musa","3411221030", "Tehnik Informatika", "Hacks@gmail.com"],
    ["Alfauzan","3411221050", "Tehnik Informatika", "CallMeLeon@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li> Nama : <?php echo $mhs[0]; ?></li>
        <li> NIM :<?php echo $mhs[1]; ?></li>
        <li> JURUSAN : <?php echo $mhs[2]; ?></li>
        <li> EMAIL : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>