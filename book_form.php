<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $cardName = $_POST['card_name'];
      $cardNumber = $_POST['card_number'];
      $expMonth = $_POST['exp_month'];
      $expYear = $_POST['exp_year'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $cvv = $_POST['cvv'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving, card_name, card_number, exp_month, exp_year, city, state, zip, cvv) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$cardName', '$cardNumber', '$expMonth', '$expYear', '$city', '$state', '$zip', '$cvv') ";
      mysqli_query($connection, $request);

      header('location:book_successfully.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>