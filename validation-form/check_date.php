<h3>Today is: </h3> 

<?php
  echo date('d.m.Y');

  require 'connect.php';
  $id_in = filter_var($_POST['id_in']);

  echo "<br/> <h3> Your dogovor should be finished on: </h3> ";
 $result = $mysql->query("SELECT `datafinish` FROM `dogovor` WHERE `id_in` = '$id_in'");
 $user = $result->fetch_assoc();
 print_r($user[datafinish]);
 
 $mysql -> close();   
?>

