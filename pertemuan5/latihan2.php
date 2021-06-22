<?php 
$angka = [11,21,123,52,67,22];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 2</title>
	<style>
		div{
			width: 50px;
			height: 50px;
			background-color: blue;
			text-align: center;
			line-height: 50px;
			color: white;
			margin: 3px;
			float: left;
		}
	</style>
</head>
<body>
	<?php for($s = 0; $s < count($angka); $s++) {?>
<div><?= $angka[$s] ?></div>

<?php } ?>
</body>
</html>