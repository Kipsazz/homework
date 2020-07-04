<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 08</title>
	</head>

	<body>
	<?php
		$temperature = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

		$avarageTemp = array_sum($temperature) / count($temperature);
		rsort($temperature);
		echo 'Avarage temperature: ' . round($avarageTemp) . '<br>';
		$result = array_unique($temperature);
		echo "Highest temperature: ";
		$highest = array_slice($result, 0, 5);
		foreach ($highest as $temp) {
			echo $temp . '. ';
		}
		echo "<br> Lowest temperature: ";
		$lowest = array_slice($result, -5,5);
		foreach ($lowest as $temp) {
			echo $temp . '. ';
		}
	?>
	</body>
</html>
