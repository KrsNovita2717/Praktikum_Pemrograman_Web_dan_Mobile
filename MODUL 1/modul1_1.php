<?php
     $arrayNama= ["Guntoro", "Mustika Nita Pratiwi", "Rony Dwi Jayanto","Novita Kristiana",
     "Cyntya Andreyani","Deovany Arbiantara"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul1_1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="1" align="center">
        <thead>
            <tr>
                <th>Nama</th>
            </tr>
        </thead>
            <?php foreach ($arrayNama as $name) :  ?>
                <tr>
                    <td><?php echo $name."<br>"; ?></td>
                </tr>            
	        <?php endforeach; ?>    
    </table>
</body>
</html>