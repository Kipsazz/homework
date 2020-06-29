<?php
	$pageTitle = "PHP 03 assignment"
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pageTitle?></title>
	</head>

	<body>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x + $y;
				$output = '10 + 7 = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x - $y;
				$output = '10 - 7 = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x * $y;
				$output = '10 * 7 = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x / $y;
				$output = '10 / 7 = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x % $y;
				$output = '10 % 7 = ' . $sum;
				echo $output;
			?>
		</div>
<!--Jauciu kad gerai ir taip ir taip butu ar ne ? -->
		<p><b>Another way.</b></p>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x + $y;
				$numTen = '10';
				$numSeven = '7';
				$output = $numTen . ' + ' . $numSeven . ' = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x - $y;
				$numTen = '10';
				$numSeven = '7';
				$output = $numTen . ' - ' . $numSeven . ' = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x * $y;
				$numTen = '10';
				$numSeven = '7';
				$output = $numTen . ' * ' . $numSeven . ' = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x / $y;
				$numTen = '10';
				$numSeven = '7';
				$output = $numTen . ' / ' . $numSeven . ' = ' . $sum;
				echo $output;
			?>
		</div>
		<div>
			<?php
				$x = 10;
				$y = 7;
				$sum = $x % $y;
				$numTen = '10';
				$numSeven = '7';
				$output = $numTen . ' % ' . $numSeven . ' = ' . $sum;
				echo $output;
			?>
		</div>
	</body>
</html>
