<?php
function ucul($waktu, $namadepan){
	return "Selamat $waktu, $namadepan";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Function</title>
</head>
<body>
<h1><?= ucul("Pagi", "Udin"); ?></h1>
</body>
</html>