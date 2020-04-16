<?php
 
 $id_in = filter_var($_POST['id_in']);
 $id_firm = filter_var($_POST['id_firm']);
 $named = filter_var($_POST['named']);
 $numberd = filter_var($_POST['numberd']);
 $sumd = filter_var($_POST['sumd']);
 $datastart = filter_var($_POST['datastart']);
 $avans = filter_var($_POST['avans']);

 require 'connect.php';

 echo " <h2> Past record:</h2> ";
 $result = $mysql->query("SELECT * FROM `dogovor` WHERE `id_in` = '$id_in'");
 $user = $result->fetch_assoc(); 
 if (count($user) == 0) {
   echo "id not found";
   exit(); }
 print_r($user);

 $mysql-> query("UPDATE `dogovor` 
                 SET `id_in` = '$id_in',`id_firm` = '$id_firm', `named` = '$named', `numberd` = '$numberd',`sumd` = '$sumd',
                 `datastart` = '$datastart', `datafinish` = DATE_ADD('$datastart', interval '$numberd' day), `avans` = '$avans'
                 WHERE `id_in` = '$id_in' "); 

 echo "<br/> <h2> Current record: </h2> ";
 $result = $mysql->query("SELECT * FROM `dogovor` WHERE `id_in` = '$id_in'");
 $user = $result->fetch_assoc();
 print_r($user);
 
 $mysql -> close();       
 
 ?>
