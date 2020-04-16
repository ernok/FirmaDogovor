<?php

  require 'connect.php';
  $id_in = filter_var($_POST['id_in']);

  echo "<h3> You already paid: </h3> ";
  $result = $mysql->query("SELECT (`avans` *100) / `sumd` AS `persent` FROM `dogovor`WHERE `id_in` = '$id_in'");
  
  $user = $result->fetch_assoc();
  print_r($user[persent]);
  echo "% (percent) of the total";

 $mysql -> close();   
?>

