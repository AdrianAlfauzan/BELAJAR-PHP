<?php

require 'function.php';

// Ambil data di URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// vardump untuk mengecek (wajib pakai [0] ya! dia itu index pembungkus)
// var_dump($mhs[0]["nrp"]);

// cek apakah tombol sumbit telah di tekan atau belum
if(isset($_POST["submit"])){

    // Cek apakah data berhasil di update atau tidak
    if(update($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Di Update');
                document.location.href = 'index2.php'
                </script>
        ";
    }else{
        echo "<script>
                alert('Data Gagal Di Update');
                document.location.href = 'index2.php'
                </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]?>">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>

            <br>
            <a href="index2.php">Kembali</a>
        </ul>
    </form>
</body>
</html>