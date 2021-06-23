<?php
$penduduk = [
    [
    "nadep" => "Naruto", 
    "nakang"=> "Uzumaki",
    "nik" => "10000101",
    "kelas" => "Hokage",
    "email" =>"naruto@konoha.com",
    "foto" =>"naruto.jpg"
    ],
    [
    "nadep" => "Hinata", 
    "nakang"=> "Hyuga",
    "nik" => "10000102",
    "kelas" => "Jounin",
    "email" =>"hinata@konoha.com",
    "foto" =>"hinata.jpg"
    ],
    [
    "nadep" => "Boruto", 
    "nakang"=> "Uzumaki",
    "nik" => "10000103",
    "kelas" => "Chunin",
    "email" =>"boruto@konoha.com",
    "foto" =>"boruto.jpg"
    ],
    [
    "nadep" => "Himawari", 
    "nakang"=> "Uzumaki",
    "nik" => "10000104",
    "kelas" => "Genin",
    "email" =>"himawari@konoha.com",
    "foto" =>"himawari.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Daftar Penduduk Konoha</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
<h1>Daftar Penduduk</h1>
<ul>
<?php foreach($penduduk as $pdk):?>
    <li><a href="latihan2.php?nadep=<?=$pdk["nadep"]?>&nakang=<?=$pdk["nakang"]?>&nik=<?=$pdk["nik"]?>&kelas=<?=$pdk["kelas"]?>&email=<?=$pdk["email"]?>&foto=<?=$pdk["foto"]?>"><?=$pdk["nadep"]." ".$pdk["nakang"]?></a></li>
<?php endforeach?>
</ul>
</body>
</html>