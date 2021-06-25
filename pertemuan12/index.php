<?php
require "functions.php";
$penduduk = query("SELECT * FROM penduduk");

if(isset($_POST["search"]) ) {
    $penduduk = search($_POST["keyword"]);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylex.css">
    <title>Document</title>
</head>
<body>
<h1>Daftar Penduduk</h1>
<?php $i = 1; ?>
<button onclick="location.href='inputdata.php'">Tambah Data</button>
<form class="searchbar" action="" method="post">
    <input type="text" name="keyword" size="30" placeholder="Masukkan keyword pencarian.." autofocus autocomplete="off">
    <button type="submit" name="search">Search</button>
</form>
<table class="table" border="1px" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Kelas</th>
    <th>Email</th>
    <th>Action</th>
    <?php foreach($penduduk as $baris):?>
</tr>
    <td><?= $i; ?></td>
    <td><img class="foto" src="img/<?=$baris["foto"];?>"></td>
    <td><?= $baris["fname"]." ".$baris["lname"];?></td>
    <td><?= $baris["nik"];?></td>
    <td><?= $baris["kelas"];?></td>
    <td><?= $baris["email"];?></td>
    <td>
        <a href="modify.php?id=<?=$baris["id"]?>">Ubah</a> | 
        <a href="delete.php?id=<?=$baris["id"]?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
    </td>
<tr>
<?php $i++ ?>
<?php endforeach ?>
</tr>
</table>
</body>
</html>