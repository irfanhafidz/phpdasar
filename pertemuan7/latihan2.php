<?php
if(!isset($_GET["nadep"]) ||
!isset($_GET["nakang"]) ||
!isset($_GET["nik"]) ||
!isset($_GET["kelas"]) ||
!isset($_GET["email"]) ||
!isset($_GET["foto"])
) {
    header("Location: latihan1GET.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class=float>
<ul class=list>
    <li class="container"><img class="foto" src="img/<?=$_GET["foto"]?>"></li>
    <li>Nama : <?=$_GET["nadep"]." ".$_GET["nakang"]?></li>
    <li>NIK : <?=$_GET["nik"]?></li>
    <li>Tingkat : <?=$_GET["kelas"]?></li>
    <li>E-Mail : <?=$_GET["email"]?></li>
    <div class="clear"></div>
</ul>
</div>
</body>
</html>