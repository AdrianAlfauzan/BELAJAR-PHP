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
?>