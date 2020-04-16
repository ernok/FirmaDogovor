<?php
 
 
 $id_firm = filter_var($_POST['id_firm']);
 $named = filter_var($_POST['named']);
 $numberd = filter_var($_POST['numberd']);
 $sumd = filter_var($_POST['sumd']);
 $datastart = filter_var($_POST['datastart']);
 $avans = filter_var($_POST['avans']);  
 
 require 'connect.php';

 $mysql-> query("INSERT INTO `dogovor` (`id_firm`,`named`,`numberd`,`sumd`,`datastart`, `datafinish`, `avans`) 
                VALUES('$id_firm','$named', '$numberd', '$sumd', '$datastart' 
                       , DATE_ADD('$datastart', interval '$numberd' day), '$avans')"); 

 $result = $mysql->query("SELECT MAX(`id_in`) AS YourDogovorId FROM `dogovor`");
 $user = $result->fetch_assoc(); 
 print_r($user);
 
 $mysql -> close();       

?>
