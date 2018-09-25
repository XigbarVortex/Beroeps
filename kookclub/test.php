<select class="selectstyle" name="ingredienten[] " multiple>
  <?php
  $opdracht = "SELECT * FROM ingredienten";
  $result = mysqli_query($mysqli, $opdracht);
  while($row = mysqli_fetch_array($result)){
    echo "<option value = '" . $row['ingredientenid'] . "'>";
    echo $row['naam'];
    echo "</option>";
  }
  ?>
