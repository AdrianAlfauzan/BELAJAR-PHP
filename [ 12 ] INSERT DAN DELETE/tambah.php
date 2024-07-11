<?php

require 'function.php';

// cek apakah tombol sumbit telah di tekan atau belum
if(isset($_POST["submit"])){

    // Cek apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil');
                document.location.href = 'index2.php'
                </script>
        ";
    }else{
        echo "<script>
                alert('Data Gagal');
                document.location.href = 'index2.php'
                </script>
        ";
    }










    // [+] CARA MANUAL
    // ambil data dari tiap elemen dalam form
    // $nama = $_POST["nama"];
    // $nrp = $_POST["nrp"];
    // $jurusan = $_POST["jurusan"];
    // $email = $_POST["email"];
    // $gambar = $_POST["gambar"];
    // // ambil query insert data
    // $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nrp','$jurusan','$email','$gambar')";
    // mysqli_query($db, $query);

    // // cek apakah data berhasil ditambahkan atau tidak
    // if(mysqli_affected_rows($db) > 0){
    //     echo "Berhasil";
    // }else{
    //     echo "Gagal";
    //     echo"<br>";
    //     echo mysqli_error($db);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
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