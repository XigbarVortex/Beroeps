<?php
require "config.inc.php";


$titel = $_POST["titel"];
$beschrijving = $_POST["beschrijving"];
$userid = $_POST["userid"];
$foto = $_POST["foto"];
$soort = $_POST["soort"];

if(!empty($_POST['ingredienten'])) {
    foreach($_POST['ingredienten'] as $ingredienten) {
            echo $ingredienten; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
} else {
 echo "er is niks in ";
}


$query = "INSERT INTO recepten
        ('titel', 'beschrijving', 'userid', 'foto','soort',)
        VALUES(
          '$titel',
          '$beschrijving',
          '$userid',
          '$foto'
          '$soort')
          ";

$result = mysqli_query($mysqli, $query);
  if ($result)
  {
    $receptenid = LAST_INSERT_ID();
    extract $ingredienten;
    foreach ($ingredienten as $c) {
      $query2 = "INSERT INTO koppel
      ('ingredientenid','receptenid')
      VALUES(
        '$c'
        '$receptenid')";
        $result2 = mysqli_query($mysqli, $query1);
        if ($result2)
        {
          echo "Toevoegen van recept is gelukt!";
        }




    }
  } else { print_r($ingredienten); }

?>
