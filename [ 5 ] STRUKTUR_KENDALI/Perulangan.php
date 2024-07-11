<?php
//Pengulangan
// foreach : pengulangan khusus array

// [+] for
// for ($i = 0; $i < 5; $i++){
//     echo "Hello World! <br>";
// }


//[+] while
// $i = 0;
// while($i < 5){
//     echo "Hallo! <br>";
//     $i++;
// }

//do..while --> dia akan dilakukan sekali jika kondisi bernilai FALSE
$i = 0;
do{
    echo "Hello Guys! <br>";
    $i++;
}while($i < 5)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php
        // cara 1
        for ($i = 1; $i <= 3; $i++){
            echo "<tr>";
            for($j = 1; $j <=5; $j++){
                echo "<td> $i, $j </td>";
            }
            echo "</tr>";
        }
        ?> -->

        <?php
        // cara 2
        // : --> pembuka kurung kurawal "{"
        // endfor; penutup dari kurung kurawal "}"
        for ($i = 1; $i <= 3; $i++) :?>

        <tr>
            <?php for ($j = 1; $j <= 5;$j++ ) { ?>

                <td> <?= "$i,$j";?> </td>
                <!-- // jika ketemu "< ? ="\ itu sama saja seperti echo -->

            <?php } ?>
        </tr>

        <?php endfor; ?>
    </table>
</body>
</html>