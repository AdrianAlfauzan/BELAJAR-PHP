<?php
// [+] Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// [+] Time
// ini disebut dengan UNIX Timestamp / EPOCH time
// ini artinya detik yang sudah berlalu sejak 1 januari 1970
// ketika di refresh, detiknya akan terus bertambah
// echo time();
// cara 1 --> untuk mengecek 2 hari kedepan
// echo date("l", time() + 172800);
// jadi, tampilkan hari ditambah sekian detik (2 hari yang akan datang)

// cara 2 --> untuk mengecek 2 hari kedepan
// echo date("l", time() + 60*60*24*2);
// jadi, tampilkan hari ditambah sekian detik (2 hari yang akan datang)

// cara 3 --> untuk mengecek 2 hari kebelakang
// hanya perlu ubah + jadi -
// echo date("l d M Y", time() - 60*60*24*2);

// [+] mktime --> untuk membuat sendiri detik
// mktime ini parameter / argumentnya ada 6
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal dan tahun

// echo date("l" , mktime(0, 0, 0, 6,18,2003));

// [+] strtotime --> sama seperti mktime, cuman ini pakai string
echo date("l" , strtotime("25 june 2003"));
?>