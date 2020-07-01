<?php
$pageTitle = 'PHP 06';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pageTitle; ?></title>
	</head>

	<body>
		<?php
			$years = 1774;
			$cities3 = [
				'Washington' => [0.6, 1790, 'USA'],
			];

		if ($years >=0) {
			if($years >= $cities3['Washington'][1]) {
				echo 'Washington is the capital of the U.S.';
			} elseif ($years == 1774) {
				echo 'The U.S. capital is still in Philadelphia.';
			} else {
			$sum = $years - $cities3['Washington'][1];
				echo 'Years ' . $sum . ' left.';
			}
		}
		?>
	</body>
</html>
