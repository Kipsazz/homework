<?php
	$pageTitle = 'PHP assignment 02';
?>
<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pageTitle ?></title>
	</head>

	<body>
		<?php
		$salis = 'Lietuva';
		$miestas = 'Vilnius';
		$populiacija = '574221';

		echo '\'' . $miestas . ' - Lietuvos sostine.\'';
		echo "\"$miestas ir $salis sparciai auga\"";
		?>
	</body>
</html>
