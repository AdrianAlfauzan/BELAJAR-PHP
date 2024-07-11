<?php
session_start();
if ( !isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// Mengambil data dari file lain
require 'function.php';

$mahasiswa = query('SELECT * FROM mahasiswa');

// ambil data dari tabel mahasiswa / query data mahasiswa
// 1. koneksi ke database
// 2. masukkann querynya / syntax sqli
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// Ilmu Baru Untuk Tampilan: 
// ASC --> DARI KECIL KE BESAR
// [+] $result = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id ASC");
// DESC --> DARI BESAR KE KECIL 
// [+] $result = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id DESC");
// mengecek apakah konek atau tidak

// Tombol cari ditekan
if(isset($_POST["tombolcari"])){
    $mahasiswa = cari($_POST["search"]);
}
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
    <style>
        .loader{
            width: 30px;
            position: absolute;
            top: 150px;
            z-index: -1;
            display: none;
        }

        /* // Untuk menggunakan fitur PDF, agar ketika di PDF kan hilang elemen ini. */
        @media print{
            .logout,.tambah,.form-cari,.aksi{
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php">Cetak</a>
    <br> 
    <br>
    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
    <br>
    <br>
    <!-- Input Tidak akan bisa jalan jika tanpa Form, setidaknya di php! -->
    <!-- Dalam membuat search Wajib ada Action dan Method! -->
    <!-- Dikarenakan pencariannya itu di halaman yang tetap, jadi Action di kosongkan saja. -->
    <!-- Jika ingin datanya tampil di Url, gunakan method="get" -->
    <!-- Jika ingin datanya tidak ingin tampil di Url, gunakan method="post" -->
    <form action="" method="post" class="form-cari">
        <!-- autofocus ==> dia akan otomatis auto klik ketika sudah di web -->
        <!-- autocomplete ==> menghapus history pencariannya -->
        <input type="text" name="search" size="50" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="tombolcari" id="tombol-cari">Cari</button>
        <img class="loader" src="image/loader-gif.gif">
    </form>
    
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0" >
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
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
                <td class="aksi">
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
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/script2.js"></script>
</body>
</html>
