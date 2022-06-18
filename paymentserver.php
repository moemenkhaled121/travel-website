<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   $connection = new pdo('mysql:dbname=travel_and_tour;host=localhost', 'root', '');

   var_dump($connection);

   $sql = $connection->prepare("SELECT * FROM payment");
   $sql->execute();
   while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
       var_dump($result);
   }

   if(isset($_POST['send'])){
      $name_on_card = $_POST['name'];
      $card_number = $_POST['card_number'];
      $expiry_date = $_POST['exp_date'];
      $security_code = $_POST['cvv'];
    

      $request = " insert into payment (card_number, name, exp_date, cvv) values('$card_number','$name_on_card','$expiry_date','$security_code') ";
      $connection->exec($request);

     // header('location:payment.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>