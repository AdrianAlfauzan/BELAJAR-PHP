<?php
// koneksi ke database
// 1. nama host
// 2. username
// 3. password
// 4. nama databasenya
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
// 1. koneksi ke database
// 2. masukkann querynya / syntax sqli
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// mengecek apakah konek atau tidak
if(!$result){
    echo mysqli_error($db);
}

// ambil data(fetch) mahasiswa dari object result 
// ada 4 cara mengambil datanya :
// 1. mysqli_fetch_row() --> mengembalikkan array numerik, hanya dengan index
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// 2. mysqli_fetch_assoc() --> mengembalikkan array numerik, hanya dengan string
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nama"]);

// 3. mysqli_fetch_array() --> mengembalikkan keduanya, bisa index bisa string, hanya saja menjadi double
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// 4. mysqli_fetch_object() --> Mengembalikan object
// cara nya ini pakai panah dan apa nama fieldnya
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// Membuat pengulangan agar semua data muncul
// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

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

        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="">Update</a> |
                <a href="">Delete</a>
            </td>
            <td><img src="Image/<?= $row["gambar"]; ?>" width="50" alt=""></td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>