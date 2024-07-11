<?php
// bisa juga seperti ini dengan memakai default!
// function salam($waktu="Sore",$nama="Leon")
function salam($waktu,$nama){
    return "Selamat $waktu, $nama !";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam("Pagi","Adrian"); ?></h1>
</body>
</html>