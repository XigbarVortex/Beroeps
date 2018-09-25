<!DOCTYPE html>
<html class="animated fadeIn">
<head>

	<title>Welkom</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/animate.css">
	<script type="text/javascript" src="script/script.js"></script>

</head>
<body>
	<div class="navlogo">
		<center class="animated bounceIn">
			<img src="images/logo.png" alt="logo" class="logoimg">
		</center>
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

		<div>
			<center>
				<form class="loginform" action="login_verwerk.php" method="post">
				
				<div>
					Gebruikersnaam:<br>
					<input class="loginformbar" type="text" name="username" placeholder="Gebruikersnaam...">
					<br>
					<br>
					Wachtwoord:<br>
					<input class="loginformbar" type="password" name="password" placeholder="Wachtwoord...">
					<br>
					<br>
					<input class="loginformsubmit" type="submit" name="submit" value="Login">
				</div>

				</form>
					<p style="font-size: 20px;">Nog geen lid?<br>
					 Meld u nu aan.</p>


				<div>
				<hr style="width: 50%;">
				<br>
				<form class="loginform" action="register_verwerk.php" method="post">

					Email adres:<br>
					<input class="loginformbar" type="text" name="email" placeholder="Email...">
					<br>
					<br>
					Gebruikersnaam:<br>
					<input class="loginformbar" type="text" name="username" placeholder="Gebruikersnaam...">
					<br>
					<br>
					Wachtwoord:<br>
					<input class="loginformbar" type="password" name="password" placeholder="Wachtwoord...">
					<br>
					<br>
					<input class="loginformsubmit" type="submit" name="submit" value="Registreer">
				</form>
				</div>



			</center>
		</div> 

	</div>
</body>	
</html>