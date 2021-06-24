<?php
require "functions.php";
$penduduk = query("SELECT * FROM penduduk");
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<h1>Daftar Penduduk</h1>
<table border="1px" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Kelas</th>
    <th>Email</th>
    <?php foreach($penduduk as $baris):?>
</tr>
    <td><?= $i; ?></td>
    <td><img class="foto" src="img/<?=$baris["foto"]?>"></td>
    <td><?= $baris["fname"]." ".$baris["lname"]?></td>
    <td><?= $baris["nik"]?></td>
    <td><?= $baris["kelas"]?></td>
    <td><?= $baris["email"]?></td>
<tr>
<?php $i++ ?>
<?php endforeach ?>
</tr>
</table>
</body>
</html>