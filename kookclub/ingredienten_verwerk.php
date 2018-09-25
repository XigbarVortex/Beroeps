<?php
require_once 'config.inc.php';

$naam = $_POST['naam'];

$query = "INSERT INTO ingredienten
        (naam)
        VALUES('$naam')";
$result = mysqli_query($mysqli, $query);
  if($result)
  {
    header("Location:recept.php");
    exit;
  }
?>
