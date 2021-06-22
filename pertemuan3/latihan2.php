<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 2</title>
	<style>
		.warna-baris {
		background-color: blue;
	}
	</style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php 
	for($i=1; $i<=9; $i++) :
		echo "<tr>";
		for($j=1; $j<=9; $j++) {
			echo "<td>$i,$j</td>";
		}
	endfor;
	echo "</tr>";

	 ?>
</table>
<table border="1" cellpadding="10" cellspacing="0">
	<?php for($w=1;$w<=9;$w++): ?>
		<?php if ($w % 2 == 1) : ?>
		<tr class="warna-baris">
			<?php else :?>
		<tr>
			<?php endif ?>
			<?php for($e=1;$e<=9;$e++):?>
				<td><?= "$w,$e";?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>

</table>
</body>
</html>