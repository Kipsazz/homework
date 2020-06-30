<?php
	$pageTitle = 'PHP04 HOMEWORK';
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
			$cities = ['Berlin', 'Roma', 'London'];
			$cities [] = 'Tokyo';
			print_r ($cities);
			echo '<br/><br/>';
		?>
	</div>
	<ul>
		<li>
			<?php
				echo $cities[1];
			?>
		</li>
	</ul>
	<div>
		<?php
			$cities2 = ['Tokyo' => 13.6, 'Washington' => 0.6, 'Moscow' => 11.5];
			$cities2 ['London'] = 8.6;
			foreach($cities2 as $city => $population) {
				echo $city .' - '. $population . ' ;';
				echo '<br/><br/>';
			};
		?>
	</div>
	<ul>
		<li>
			<?php
			 echo 'Population : '. $cities2['Tokyo'] . ' mln.';
			?>
		</li>
	</ul>
	</body>
</html>


