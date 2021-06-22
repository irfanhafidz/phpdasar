<?php
$santri = [
    ["Udin Kopeah", "1230001", "Teknik Membuat Cireng", "udin_racing@gmail.com"],
    ["Asep Jabrig", "1230002", "Teknik Mengejar Mantan", "asep123@gmail.com"],
    ["Dadang Kumis", "1230003", "Teknik Penyubur Bulu", "antirontok@gmail.com"],
];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 3</title>
    </head>
<body>
<h1>Daftar Santri</h1>
<?php foreach($santri as $str){ ?>
<ul>
    <li>Nama : <?=$str[0];?></li>
    <li>NIS : <?=$str[1];?></li>
    <li>Jurusan : <?=$str[2];?></li>
    <li>Email : <?=$str[3];?></li>
</ul>

<?php } ?>
</body>
</html>