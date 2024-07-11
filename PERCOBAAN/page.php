<?php
require 'Koneksi.php';


// Penanganan penghapusan data
if(isset($_POST["hapus"])){
    $id_to_delete = $_POST["id"];
    $query_delete = mysqli_query($db, "DELETE FROM pengguna WHERE id='$id_to_delete'");
    if($query_delete){
        echo "Data berhasil dihapus";   
    } else {
        echo "Gagal menghapus data pengguna: " . mysqli_error($db);
    }
}


if(isset($_POST["tambah"])){
    $id = $_POST["id"];
    $nama = $_POST["nama"];

    // Eksekusi query untuk menambahkan data ke dalam tabel pengguna
    $hasil = mysqli_query($db, "INSERT INTO pengguna (id, nama) VALUES ('$id', '$nama')");

    // Periksa apakah data berhasil ditambahkan
    if($hasil){
        echo "Data berhasil ditambahkan";   
    } else {
        echo "Gagal menambahkan data pengguna: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <style>
        li {
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Halaman Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <label for="id">ID : </label>
            <input type="text" name="id" id="id">
        </ul>
        <ul>
            <label for="nama">NAMA : </label>
            <input type="text" name="nama" id="nama">
        </ul>
      
        <ul>
            <button type="submit" name="tambah">Tambah Data</button>
        </ul>
    </form>

    <ul>
        <?php
        // Jika data berhasil ditambahkan, ambil data dari tabel pengguna
        $hasilPengguna = mysqli_query($db, "SELECT * FROM pengguna");

        // Menampilkan data pengguna
        if ($hasilPengguna == true) :
        ?>
            <h2>Data Pengguna:</h2>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($hasilPengguna)) : ?>
                    <li>ID: <?= $row['id'] ?>, Nama: <?= $row['nama'] ?></li>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="hapus">Delete</button>
                    </form>
                        
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>Gagal mengambil data pengguna: <?= mysqli_error($db) ?></p>
        <?php endif; ?>
    </ul>

</body>
</html>

