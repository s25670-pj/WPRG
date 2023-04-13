<!DOCTYPE html>
<html>
<head>
	<title>Wynik</title>
</head>
<body>
	<h1>Wynik</h1>

	<?php
	$liczba = $_POST['liczba'];

	if (!is_numeric($liczba) || $liczba <= 0 || floor($liczba) != $liczba) {
		echo '<p>Błędna wartość liczby.</p>';
	} else {
		$counter = 0;
		$isPrime = true;
		for ($i = 2; $i <= sqrt($liczba); $i++) {
			$counter++;
			if ($liczba % $i == 0) {
				$isPrime = false;
				break;
			}
		}

		if ($isPrime) {
			echo "<p>Liczba $liczba jest liczbą pierwszą.</p>";
		} else {
			echo "<p>Liczba $liczba nie jest liczbą pierwszą.</p>";
		}

		echo "<p>Ilość iteracji pętli: $counter</p>";
	}
	?>
</body>
</html>
