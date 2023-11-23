<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send_inquiry'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $message = $_POST['message'];

     

      $request = " insert into inquiry_form(name, email, phone, address, location, message) values('$name','$email','$phone','$address','$location','$message') ";
     
      $result = mysqli_query($connection, $request);
   

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>