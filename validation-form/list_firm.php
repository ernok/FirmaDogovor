<?php
      require 'PDOconnectDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `firm` ORDER BY `id_firm` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->name.'</b></li>';
      }
      echo '</ul>';
    ?>