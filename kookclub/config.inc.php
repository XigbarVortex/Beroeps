<?php
//toon meldingen
error_reporting(E_ALL);
ini_set('display_errors', '1');


//database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '81446_BEROEPS';
$db_password = 'Bramvis6';
$db_database = '81446_BEROEPS';

// maak de database-verbiding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//Als de verbinding niet gemaakt kan worden: Geef een melding
if (!$mysqli) {
	echo "FOUT: geen connectie naar databse. <br>";
	echo "Errno: " . mysqli_connect_errno() . "<br/>";
	echo "Error: " . mysqli_connect_error() . "<br/>";
	exit;
}
