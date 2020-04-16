<?php
 
 $id_firm = filter_var($_POST['id_firm']);
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

 echo " <h2> Past record:</h2> ";
 $result = $mysql->query("SELECT * FROM `firm` WHERE `id_firm` = '$id_firm'");
 $user = $result->fetch_assoc(); 
 if (count($user) == 0) {
   echo "id not found";
   exit(); }
 print_r($user);

 $mysql-> query("UPDATE `firm` 
                 SET `name`='$name',`shef`='$shef',`address`='$address'
                 WHERE `id_firm` = '$id_firm' "); 

 echo "<br/> <h2> Current record: </h2> ";
 $result = $mysql->query("SELECT * FROM `firm` WHERE `id_firm` = '$id_firm'");
 $user = $result->fetch_assoc();
 print_r($user);
 
 $mysql -> close();       
 
 ?>
