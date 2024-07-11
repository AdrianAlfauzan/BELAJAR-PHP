<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak{
            width: 100px;
            height: 100px;
            background-color: greenyellow;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
        .kotak:hover{
            transform: rotate(180deg);
            transition: 1s;
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    echo $angka[1][1]; // muncul angka 5
    ?>
    
    <?php foreach($angka as $a) :?>
        
            <?php foreach($a as $b) :?>
                <div class="kotak"><?php echo $b; ?></div>
            <?php endforeach?>

            <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>