<?php
	$title = 'PHP 01';
?>
<!DOCTYPE html>
<html lang="lt">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title><?php echo $title ?></title>
</head>

<body>
	<?php
	$salis = 'Lietuva';
	$miestas = 'Vilnius';
	$populiacija = '574221'
	?>
	<ul>
		<li>
			<?php
			 echo $salis;
			?>
		</li>
		<li>
			<?php
			echo $miestas;
			?>
		</li>
		<li>
			<?php
			echo $populiacija;
			?>
		</li>
	</ul>

</body>
</html>
