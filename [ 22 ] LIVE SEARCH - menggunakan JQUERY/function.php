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

    // jika user tidak pilih gambar
    if( $_FILES['gambar']['error'] == 4 ) {
        echo "<script>
                alert('harap pilih gambar terlebih dahulu!');
                document.location.href = 'tambah.php';
            </script>";
        return false;
    }

    if( ! cek_gambar() ) {
        return false;
    }

    // buat nama file baru
    $ekstensiGambar = explode('.', $_FILES['gambar']['name']);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $nama_file_baru = uniqid() . '.' . $ekstensiGambar;
    $gambar = $nama_file_baru;

    move_uploaded_file($_FILES['gambar']['tmp_name'], 'image/' . $gambar);

    $sql = "INSERT INTO mahasiswa
                VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($db, $sql);

    return mysqli_affected_rows($db);
}

function cek_gambar() {
	// ambil data gambar
	$gambar = $_FILES["gambar"]["name"];
	$tmp_name = $_FILES["gambar"]["tmp_name"];
	$ukuran = $_FILES["gambar"]["size"];
	$tipe = $_FILES["gambar"]["type"];
	$error = $_FILES["gambar"]["error"];

	// pengecekan gambar
	// jika ukuran file melebihi 5MB
	if( $ukuran > 5000000 ) {
		echo "<script>
				alert('ukuran file terlalu besar!');
				document.location.href = '';
			  </script>";
		return false;
	}

	// jika bukan gambar
	$tipeGambarAman = ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensiGambar = explode('.', $gambar);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( ! in_array($ekstensiGambar, $tipeGambarAman) ) {
		echo "<script>
				alert('yang anda pilih bukan gambar!');
				document.location.href = '';
			  </script>";
		return false;
	}

	return true;
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

function registrasi($data){
    global $db;
    // stripslashes ==> menghindari char backslash ("\") ke database
    // strtolower ==> memasukkan input huruf kecil semua
    $username = strtolower(stripslashes($data["username"]));
    // mysqli_real_escape_string ==> untuk memungkinkan user memasukkan password ada tanda kutipnya, 
    // dan tanda kutipnya akan dimasukkan ke database secara aman

    // mysqli_real_escape_string ini butuh 2 parameter! database dan elemennya!

    $password = mysqli_real_escape_string($db,$data["password"]);
    $confirmpassword = mysqli_real_escape_string($db,$data["confirmpassword"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user where username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username yang terpilih sudah terdaftar!');
                </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $confirmpassword){
        echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
                </script>";
        return false;
    }

    // enksripsi password
    // password_hash ==> paramater nya harus ada 2 :
    // 1. password apa yang mau di acak
    // 2. mengacaknya menggunakan algoritma apa

    // NOTE* ada fungsi enkripsi password yaitu : md5 
    // akan tetapi itu tidak disarankan!
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($db, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($db);
    
}

?>

