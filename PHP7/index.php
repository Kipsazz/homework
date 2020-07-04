<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 07</title>
	</head>

	<body>
		<?php
			 $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
		?>
		<ul>
			<?php
				echo count ($cities4);
			?>
		</ul>
		<ul>
			<?php
				for($i = 0; $i < count($cities4); $i++ ) {
					echo '<li>' . $cities4[$i] . '<li>';
				}
			?>
		</ul>
		<ul>
			<?php
			 foreach ($cities4 as $city) {
				 echo $city . '<br>';
			 }
			?>
		</ul>
	</body>
</html>
