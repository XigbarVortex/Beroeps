<!DOCTYPE html>
<html class="animated fadeIn">
<head>
	<title>Welkom</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/animate.css">
</head>
<body>
	<div class="navlogo">
		<center class="animated bounceIn">
			<img src="images/logo.png" alt="logo" class="logoimg">
		</center>	
	</div>

	<div class="login">
		<a href="login.php"><p>login</p></a>
	</div>

	<div class="nav">
	<center>
		<a href="index.php">Home</a>
		<a href="voorgerechten.php">Voorgerechten</a>
		<a href="hoofdgerechten.php">Hoofdgerechten</a>
		<a href="nagerechten.php">Nagerechten</a>
		<a href="basistechnieken.php">Basistechnieken</a>
		<a href="specialiteit.php">Specialiteit van onze leden</a>
	</center>
	</div>

	<div class="container">

		<?php

			echo "<center>";

				if ($username = "") {
					echo "Welkom, User";
				}

				else{
					echo "Welkom, " . $username;	
				}

			echo "<br><br>";

			echo "Recepten gemaakt door U:";
			echo "<br>";
			echo "<a href='recept_toevoegen.php'>Recept toevoegen</a>";

			echo "</center>";


		?>

	</div>
</body>
</html>