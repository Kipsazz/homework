<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 11</title>
	</head>

	<body>
		<form action="<?php $_PHP_SELF; ?>" method="POST">
			<input type="text" name="length" placeholder="enter first number">
			<input type="text" name="width" placeholder="enter second number">
			<button type="submit" style="padding: 2px 2px" name="submit">Push the button</button>
		</form>
		<?php
			if(isset($_POST['submit'])) {
				function result($edgeA, $edgeB) {
					$width = $edgeA * $edgeB;
					return $width;
				};
				$results = result($_POST['length'], $_POST['width']);
				echo 'Rectangle radius:' . $results;
			};
		?>
	</body>
</html>
