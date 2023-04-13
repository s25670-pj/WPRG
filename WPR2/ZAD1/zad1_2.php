<!DOCTYPE html>
<html>
<head>
	<title>Rezerwacja hotelu</title>
</head>
<body>
	<h1>Formularz rezerwacji hotelu</h1>
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
    	<label for="first_name">Imię: </label>
		<input type="text" id="first_name" name="first_name" required>
		<br><br>
		<label for="last_name">Nazwisko: </label>
		<input type="text" id="last_name" name="last_name" required>
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
		<input type="submit" value="Submit">
	</form>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numOfGuests = $_POST['num_of_guests'];
			$firstName = $_POST['first_name'];
			$lastName = $_POST['last_name'];
			$address = $_POST['address'];
			$creditCard = $_POST['credit_card'];
			$email = $_POST['email'];
			$date = $_POST['date'];
			$arrivalTime = $_POST['arrival_time'];
			$childBed = isset($_POST['child_bed']) ? 'Yes' : 'No';
			$amenities = isset($_POST['amenities'])
					? implode(', ', $_POST['amenities'])
					: '';

			$template = '
      <h2>Booking Summary</h2>
      <p>Number of guests: %s</p>
      <p>First name: %s</p>
      <p>Last name: %s</p>
      <p>Address: %s</p>
      <p>Credit card: %s</p>
      <p>Email: %s</p>
      <p>Date: %s</p>
      <p>Arrival time: %s</p>
      <p>Child bed: %s</p>
      <p>Amenities: %s</p>';

			printf($template, $numOfGuests, $firstName, $lastName, $address, $creditCard, $email, $date, $arrivalTime, $childBed, $amenities);
		}
	?>
</body>
</html>