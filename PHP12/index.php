<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 12</title>
	</head>

	<body>
		<form action="<?php $_PHP_SELF; ?>" method="POST">
			<input type="text" name="first-name" placeholder="first name">
			<input type="text" name="last-name" placeholder="last name">
		<button type="submit" name="submit" style="padding:2px 2px">Click</button>
		</form>
		<?php
			if(isset($_POST['submit'])) {
				echo 'Hello: ' . $_POST['first-name'] . ', ' . $_POST['last-name'];
			}
		?>
	</body>
</html>
