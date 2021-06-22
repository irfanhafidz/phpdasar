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
<h1>Keluarga Uzumaki</h1>
<?php foreach($penduduk as $pdk):?>
<div class=float>
<ul class=list>
    <li class="container"><img class="foto" src="img/<?=$pdk["foto"]?>"></li>
    <li>Nama : <?=$pdk["nadep"]." ".$pdk["nakang"]?></li>
    <li>NIK : <?=$pdk["nik"]?></li>
    <li>Tingkat : <?=$pdk["kelas"]?></li>
    <li>E-Mail : <?=$pdk["email"]?></li>
    <div class="clear"></div>
</ul>
</div>
<?php endforeach?>
</body>
</html>