<?php
// Cek apakah tidak ada data di $_GET
// Isset -->  Apakah data ini udah pernah dibikin atau belum
// !isset --> belum dibikin
if( !isset($_GET["nama"]) || 
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["tugas"]) ||
    !isset($_GET["gambar"])){ 
    // redirect / kita paksa balik ke halaman lain
    header("Location: Latihan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <li><?php echo $_GET["nama"];?></li>
        <li><?php echo $_GET["nim"];?></li>
        <li><?php echo $_GET["jurusan"];?></li>
        <li><?php echo $_GET["email"];?></li>
        <li><?php echo $_GET["tugas"];?></li>
        <li>
            <img src="Image/<?php echo $_GET["gambar"];?>" width="30" alt="">
        </li>
    </ul>

    <a href="Latihan.php"> Kembali </a>
</body>
</html>