<?php
// menghilangkan seluruh sessionnya
session_start();
session_destroy();
echo "Anda sudah logout";
echo "<br>";
echo "Anda tidak dapat lagi masuk ke halaman2.php!";
echo "<br>";
echo "Anda bisa masuk ke halaman2.php dengan masuk terlebih dahulu ke halaman1.php!";

?>