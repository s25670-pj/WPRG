<!DOCTYPE html>
<html>
<head>
	<title>Rezerwacja hotelu</title>
</head>
<body>
	<h1>Formularz rezerwacji hotelu</h1>
	<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num_of_guests">Liczba gości (1-4): </label>
		<select id="num_of_guests" name="num_of_guests" required>
			<option value="">Wybierz</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<br><br>
		<label for="address">Adres: </label>
		<input type="text" id="address" name="address" required>
		<br><br>
		<label for="credit_card">Numer karty: </label>
		<input type="text" id="credit_card" name="credit_card" required>
		<br><br>
		<label for="email">Email: </label>
		<input type="email" id="email" name="email" required>
		<br><br>
		<label for="check_in_date">Data przyjazdu: </label>
		<input type="date" id="date" name="date" required>
		<br><br>
		<label for="arrival_time">Data wyjazdu: </label>
		<input type="time" id="arrival_time" name="arrival_time" >
		<br><br>
		<label for="child_bed">Dodatkowe łóżko dla dziecka?</label>
		<input type="checkbox" id="child_bed" name="child_bed">
		<br><br>

		<label for="amenities">Udogodnienia:</label><br>
		<input type="checkbox" id="amenities" name="amenities[]" value="Air Conditioning">
		<label for="amenities">Klimatyzacja</label><br>
		<input type="checkbox" id="amenities" name="amenities[]" value="Smoking Room">
		<label for="amenities">Pokój dla palacza</label><br>
        <br>
		<input type="hidden" id="formId" name="formId" value="firstForm"/>
		<input type="submit" value="Submit">
	</form>

	<?php } ?>
	<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numOfGuests = $_POST['num_of_guests'];
			$childBed = isset($_POST['child_bed']) ? 'Yes' : 'No';
			$amenities = isset($_POST['amenities'])
					? implode(', ', $_POST['amenities'])
					: '';

			$data = array(
				"num_of_guests" => $numOfGuests,
				"address" => $_POST['address'],
				"credit_card" => $_POST['credit_card'],
				"email" => $_POST['email'],
				"date" => $_POST['date'],
				"arrival_time" => $_POST['arrival_time'],
				"child_bed" => $childBed,
				"amenities" => $amenities
			);

			$serializedData = htmlspecialchars(serialize($data));

			echo '<form method="POST" action="guests.php">';
			for ($i = 1; $i <= $numOfGuests; $i++) {
				echo '<label for="first_names' . $i . '">Imie ' . $i . ': </label>';
				echo '<input type="text" name="first_names[]' . $i . '" id="first_names' . $i . '">';
				echo '<br><br>';
				echo '<label for="last_names' . $i . '">Nazwisko ' . $i . ': </label>';
				echo '<input type="text" name="last_names[]' . $i . '" id="last_names' . $i . '">';
				echo '<br><br>';
			} 
	?> 
			<input type="hidden" name="data" id="data" value="<?php echo $serializedData; ?>"/>
	<?php
			echo '<input type="submit" value="Submit">';
			echo '</form>';
		}
	?>
</body>
</html>
