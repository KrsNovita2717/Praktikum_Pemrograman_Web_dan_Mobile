<?php
     $arrayNama= ["Guntoro", "Mustika Nita Pratiwi", "Rony Dwi Jayanto","Novita Kristiana",
     "Cyntya Andreyani","Deovany Arbiantara"];

     function hurufV($kalimat){
        $a = substr_count(strtolower($kalimat), 'a');
        $i = substr_count(strtolower($kalimat), 'i');
        $u = substr_count(strtolower($kalimat), 'u');
        $e = substr_count(strtolower($kalimat), 'e');
        $o = substr_count(strtolower($kalimat), 'o');

        $count = ($a+$i+$u+$e+$o);
        return $count;
    }

    function hurufK($kalimat){
        $jumlahHuruf = strlen($kalimat);
        $count = $jumlahHuruf - hurufV($kalimat);
        return $count;
    }

    function hurufKTanpaSpasi($kalimat){
        $jumlahSpasi = str_word_count($kalimat)-1;
        $count = hurufK($kalimat) - $jumlahSpasi;
        return $count;
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gabungan Modul</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <table border="1" cellpadding="10" cellspacing="1" align="center">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kebalikan Nama</th>
                    <th>Jumlah Kata</th>
                    <th>Jumlah Huruf</th>
                    <th>Jumlah Karakter (termasuk Spasi)</th>
                    <th>Jumlah Huruf Vokal</th>
                    <th>Jumlah Huruf Konsonan</th>
                </tr>
            </thead>
            <?php foreach ($arrayNama as $nama) : ?>
                <tr>
                    <td><?php echo $nama."<br>"; ?></td>
                    <td><?php echo strrev($nama)."<br>"; ?></td>
                    <td><?php echo str_word_count($nama)."<br>"; ?></td>
                    <td><?php print(strlen($nama)-(str_word_count($nama)-1))."<br>"; ?></td>
                    <td><?php echo strlen($nama)."<br>"; ?></td>
                    <td><?php echo hurufV($nama)."<br>"; ?></td>
                    <td><?php echo hurufKTanpaSpasi($nama)."<br>"; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </body>
</html>