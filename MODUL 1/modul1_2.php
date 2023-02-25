<?php
    $arrayNama= ["Guntoro", "Mustika Nita Pratiwi", "Rony Dwi Jayanto","Novita Kristiana",
    "Cyntya Andreyani","Deovany Arbiantara"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Modul1_2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="1" align="center">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah Kata</th>
                    <th>Jumlah Huruf (dengan spasi)</th>
                    <th>Jumlah Huruf (tanpa spasi)</th>
                </tr>
            </thead>
            <?php foreach ($arrayNama as $nama) : ?>
                <tr>
                    <td><?php echo $nama."<br>"; ?></td>
                    <td><?php echo str_word_count($nama)."<br>"; ?></td>
                    <td><?php echo strlen($nama)."<br>"; ?></td>
                    <td><?php print(strlen($nama)-(str_word_count($nama)-1))."<br>"; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
        
    </body>
</html>