<?php
// koneksi ke database
// 1. nama host
// 2. username
// 3. password
// 4. nama databasenya
// # KONEKSI DATA
$db = mysqli_connect("localhost", "root", "", "phpdasar");
// QUERY
function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// htmlspecialchars --> INI AGAR TIDAK ADA USER / HACKER YANG ISENG (AGAR LEBIH AMAN)
function tambah($data){
    global $db;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // ambil query insert data
    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($db, $query);
  
    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM mahasiswa where id = $id");

    return mysqli_affected_rows($db);
}

function update($data){
    global $db;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // ambil query insert data
    $query = "UPDATE mahasiswa SET 
    nrp = '$nrp', 
    nama = '$nama',
    email = '$email', 
    jurusan = '$jurusan', 
    gambar = '$gambar' 
    WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function cari($search){
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$search%' OR 
    nrp LIKE '%$search%' OR 
    email LIKE '%$search%' OR 
    jurusan LIKE '%$search%'";
    return query($query);
}
?>

