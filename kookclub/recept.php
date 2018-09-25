<?php
require_once 'config.inc.php';
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
 ?>
<html class="animated fadeIn">
  <head>
    <link rel="stylesheet" href="style/style.css">
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
      <center>
        <div>
          <form class="loginform" action="recept_bewerk.php" method="POST">
            <p>Voeg hier een recept toe</p>
            Receptnaam <br><input class="loginformbar" type="text" name="titel"></input> <br><br>
            Bechrijving <br><textarea class="textarea" type="text" name="beschrijving"></textarea><br> <br>
            User ID <br><input class="loginformbar" type="text" name="userid"></input> <br><br>
            Foto <br><input type="file" name="foto"></input> <br><br>
          <div>
              <?php
              $opdracht = "SELECT * FROM ingredienten";
              $result = mysqli_query($mysqli, $opdracht);
              while($row = mysqli_fetch_array($result)){
                echo "<input type='checkbox' name = 'ingredienten[]' value = '" . $row['ingredientenid'] . "' >";
                echo $row['naam'];
                echo "</input>";
              }
              ?>
          </div>
              <br>
            </select>

            <br>
            <input type="radio" name="soort" value="voorgerecht"> voorgerecht<br>
            <input type="radio" name="soort" value="hoofdgerecht"> hoofdgerecht<br>
            <input type="radio" name="soort" value="nagerecht"> nagerecht<br>
            <input type="radio" name="soort" value="specialiteit"> specialiteit<br>
            <br>
            <input class="loginformsubmit" type="submit" value="Opslaan">
          </form>

          <div>
            <p> Ingredienten toevoegen?</p>
            <form action="ingredienten_verwerk.php" method="post">
            <input class="loginformbar"  type="text" value="naam" name="naam"><br><br>
            <input class="loginformsubmit" type="submit" value="ingredient toevoegen">
            </form>
          </div>

        </div>
      </center>
    </div>
  </body>
</html>
