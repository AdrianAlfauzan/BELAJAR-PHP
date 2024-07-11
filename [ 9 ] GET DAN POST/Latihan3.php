<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<!-- Jika, apakah dia sudah pernah di buat (submit) -->
<?php if(isset($_POST["submit"])) : ?>
    <!-- Maka tampilkan --NAMA-- -->
    <h1>Selamat Datang <?php echo htmlspecialchars($_POST["nama"])?>!</h1>
    <!-- pakai htmlspecialchars ==> agar tidak bisa di hack -->
<?php endif;?>

<body>
    <!-- // actionnya bisa di ubah ke Latihan4.php -->
    <!-- // actionnya bisa dihapus, akan tetapi dia akan tetap di Latihan3.php -->
    <form  method="post" action="">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>