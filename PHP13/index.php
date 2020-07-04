<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>php 13</title>
	</head>

	<body>
		<?php
		class Names {
			public $firstName;
			public $lastName;

			public function helloMessage() {
				return 'Hello <br>' . $this -> firstName . ' ' . $this -> lastName .'<br>';
			}
		}
		$human1 = new Names();
		$human2 = new Names();

		$human1->firstName = "Nerijus";
		$human1->lastName = "Stasiulis";

		$human2->firstName = "Sigitas";
		$human2->lastName = "Dilys";

		echo $human1->helloMessage();
		echo $human2->helloMessage();
		?>
	</body>
</html>
