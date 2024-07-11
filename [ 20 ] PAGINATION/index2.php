<?php
session_start();
if ( !isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// Mengambil data dari file lain
require 'function.php';

// Configurasi 
// round --> membulatkan bilangan pecahan jadi ke atas
// floor --> membulatkan bilangan pecahan jadi ke bawah
// *gunakan var_dump untuk pengecekan.
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = round($jumlahData / $jumlahDataPerhalaman);
// var_dump($jumlahHalaman);

// + menggunakan perkondisian
// if(isset($_GET["halaman"])){
//     $halamanAktif = $_GET["halaman"];
// } else{
//     $halamanAktif = 1;
// }
// var_dump($halamanAktif);

// + Menggunakan ternary
$halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

// rumus pagination
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman; 

// Pagination
// limit dan index ke berapa dan tampil datanya mau berapa
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerhalaman");

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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="logout.php">Logout</a>
    <br>
    <br>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>
    <!-- Input Tidak akan bisa jalan jika tanpa Form, setidaknya di php! -->
    <!-- Dalam membuat search Wajib ada Action dan Method! -->
    <!-- Dikarenakan pencariannya itu di halaman yang tetap, jadi Action di kosongkan saja. -->
    <!-- Jika ingin datanya tampil di Url, gunakan method="get" -->
    <!-- Jika ingin datanya tidak ingin tampil di Url, gunakan method="post" -->
    <form action="" method="post">
        <!-- autofocus ==> dia akan otomatis auto klik ketika sudah di web -->
        <!-- autocomplete ==> menghapus history pencariannya -->
        <input type="text" name="search" size="50" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="tombolcari">Cari</button>
    </form>

    <br>

    <!-- Navigasi -->
    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i < $jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) :?>
            <a href="?halaman=<?= $i ?>" style = "font-weight : bold; color : red;"><?= $i; ?></a>
        <?php else :?>
            <a href="?halaman=<?= $i ?>"><?= $i; ?></a>
        <?php endif;?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif; ?>
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

