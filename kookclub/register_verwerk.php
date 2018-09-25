<?php

	require 'config.inc.php';

	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = "INSERT INTO users VALUES (NULL, '$username', '$password', '$email')";

	if (mysqli_query($mysqli, $query)) {
		echo 'Toegevoegd!';
		echo "<a href='login.php'> Klik Hier om in te loggen</a>";
	}

	else {
		echo "fout bij opsturen <br>";
		echo mysqli_error($mysqli);
		echo "<a href='login.php'>terug</a>";
	}

?>
