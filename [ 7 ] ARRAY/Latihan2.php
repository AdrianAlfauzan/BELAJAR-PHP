<?php
// Pengulangan pada array
// for / foreach

$angka = [3, 4, 1, 6, 22, 9, 2,100];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body style="background:black;">
    <?php for ($i = 0; $i < count($angka); $i ++) {?>
        <div class="kotak" style="background:red;"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak" style="background:blue;"> <?php echo $a; ?></div>
    <?php }?>

    <div class="clear"></div>

    <?php foreach($angka as $a) : ?>
        <div class="kotak"style="background:yellow;"> <?php echo $a; ?></div>
    <?php endforeach ?> 

</body>
</html>