
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   $connection = new pdo('mysql:dbname=travel_and_tour;host=localhost', 'root', '');



   $sql = $connection->prepare("SELECT * FROM trip_booking");
   $sql->execute();
   while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {

   }

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into trip_booking (name, email, phone, address, location, guests, arrival, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $connection->exec($request);

      header('location: /travel website/payment.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
?>




