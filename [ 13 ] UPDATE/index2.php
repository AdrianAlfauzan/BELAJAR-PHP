<?php
// Mengambil data dari file lain
require 'function.php';

$mahasiswa = query('SELECT * FROM mahasiswa');

// ambil data dari tabel mahasiswa / query data mahasiswa
// 1. koneksi ke database
// 2. masukkann querynya / syntax sqli
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// mengecek apakah konek atau tidak
if(!$result){
    echo mysqli_error($db);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;?>

        <?php foreach ($mahasiswa as $row):?>
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="update.php?id=<?= $row["id"]?>">Update</a> |
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
            </td>
            <td><img src="Image/<?php echo $row["gambar"]; ?>" width="50" alt=""></td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>