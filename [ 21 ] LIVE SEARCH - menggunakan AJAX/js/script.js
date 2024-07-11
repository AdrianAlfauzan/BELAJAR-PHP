// ambil elemen" yang dibutuhkan

var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// tambahkan event ketika keyword di ketik.
keyword.addEventListener("keypress", function () {
  // Melakukan ajaxnya sekarang :
  // Buat Object Ajax
  // xhr itu ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajaxnya
  xhr.onreadystatechange = function () {
    // 4 itu artinya ready
    // 200 itu artinya ok
    // 404 itu artinya tidak ok
    if (xhr.readyState == 4 && xhr.status == 200) {
      // responseText artinya berisi apapun isi dari sumbernya, sumber kita saat ini .txt
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  // parameter pertama request methodnya apa.
  // parameter kedua sumbernya dari mana.
  // parameter ketiga ingin Asychronus / synchronus
  // jika true = Asynchoronus
  // jika false = synchoronus
  // jika pakai false itu aneh! apa bedanya jika tidak pakai ajax.
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});
