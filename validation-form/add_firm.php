<?php
 
 $name = filter_var($_POST['name']);
 $shef = filter_var($_POST['shef']);
 $address = filter_var($_POST['address']);

 if(mb_strlen($name)  < 5 || mb_strlen($name) > 50){
     echo "Small, Big or Null value name"; 
     exit();
 } else if(mb_strlen($shef)  < 5 || mb_strlen($shef) > 50){
     echo "Small, Big or Null value shef";
     exit();
 } else if(mb_strlen($address)  < 5 || mb_strlen($address) > 200){
     echo "Small, Big or Null value address";
     exit();
 }     

 
 require 'connect.php';

 $mysql-> query("INSERT INTO `firm` (`name`,`shef`, `address`) 
                VALUES('$name', '$shef', '$address')"); 


 $result = $mysql->query("SELECT MAX(`id_firm`) AS YourIdFirm FROM `firm`");
 $user = $result->fetch_assoc(); 
 print_r($user);

 $mysql -> close();       
 
  

?>
