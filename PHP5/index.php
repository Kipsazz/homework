<?php
	$pageTitle = 'PHP 05 assigment';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pageTitle;?></title>
	</head>

	<body>
		<div>
			<?php
				$cities3 = [
					'Tokyo' => [013.6, 1868, 'Japan'],
					'Washington' => [0.6, 1790, 'USA'],
					'Moscow' => [11.5, 1147, 'Russia']
				];
				$cities3['London'] = [8.6, 43, 'England'];
				print_r($cities3);

				foreach ($cities3 as $city => $value) {
					if($city == 'London') {
					?>
						<ul>
							<li>- Gyventojų skaičius: <?php echo $value[0];?> mln.</li>
							<li>- Įkurtas: <?php echo $value [1]; ?> m.</li>
							<li>- Šalis: <?php echo $value [2]; ?> </li>
						</ul>
					<?php
					}
				};
			?>
		</div>
	</body>
</html>
