<?php
      $letterForSearch = filter_var($_POST['letterForSearch']);
      require 'PDOconnectDB.php';
      echo " <h2> Firms :</h2> ";

      echo '<ul>';
      $query = $pdo->query(' SELECT * FROM `firm` WHERE `name` LIKE "'.$letterForSearch.'%" ');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->name.'</b></li>';
      }
      echo '</ul>';
?>
