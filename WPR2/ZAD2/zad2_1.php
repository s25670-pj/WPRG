<!DOCTYPE html>
<html>
<head>
	<title>Wynik</title>
</head>
<body>
	<?php
		if (isset($_GET['birthdate'])) {
			$birthdate = $_GET['birthdate'];

			$birthdate_timestamp = strtotime($birthdate);
			$weekday = date('l', $birthdate_timestamp);

			$birthdate_datetime = new DateTime($birthdate);
			$today_datetime = new DateTime();
			$age = $birthdate_datetime->diff($today_datetime)->y;

			$next_birthday_datetime = new DateTime('next birthday', $birthdate_datetime->getTimezone());
			$days_until_birthday = $today_datetime->diff($next_birthday_datetime)->days;

			echo "<p>Urodziłeś/aś się w dniu $weekday.</p>";
			echo "<p>Twoje ukończone lata: $age.</p>";
			echo "<p>Do Twoich najbliższych urodzin pozostało $days_until_birthday dni.</p>";
		} else {
			echo "<p>Błąd: nie podano daty urodzenia.</p>";
		}
	?>
</body>
</html>
