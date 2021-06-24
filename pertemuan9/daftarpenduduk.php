<?php
//XAMPP
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
$result = mysqli_query($conn, "SELECT * FROM penduduk");

//$pdk = mysqli_fetch_all($result);
// var_dump($pdk);
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
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Email</th>
    <th>Kelas</th>
    <?php while($baris = mysqli_fetch_assoc($result)):?>
</tr>
    <td><?= $baris["id"]?></td>
    <td><img class="foto" src="img/<?=$baris["foto"]?>"></td>
    <td><?= $baris["fname"]." ".$baris["lname"]?></td>
    <td><?= $baris["nik"]?></td>
    <td><?= $baris["kelas"]?></td>
    <td><?= $baris["email"]?></td>
<tr>
<?php endwhile ?>
</tr>
</table>
</body>
</html>