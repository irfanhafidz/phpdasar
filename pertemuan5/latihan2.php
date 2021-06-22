<?php 
$angkas = [11,21,123,52,67,22,99];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 2</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: blue;
			text-align: center;
			line-height: 50px;
			color: white;
			margin: 3px;
			float: left;
		}
		.clear{clear:both}
	</style>
</head>
<body>
	<?php for($s = 0; $s < count($angkas); $s++) {?>
<div class="kotak"><?= $angkas[$s] ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angkas as $angka) {?>
	<div class="kotak"><?= $angka ?></div>
<?php } ?>

<div class="clear"></div>

<?php //mencoba alternatif syntax untuk control structure (templating) ?>

<?php foreach($angkas as $angka) : ?>
	<div class="kotak"><?= $angka ?></div>
<?php endforeach ?>
</body>
</html>