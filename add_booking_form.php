<?php
   session_start();
   require 'db_connection.php';

   if(isset($_POST['update_booking'])){

        $booking_id = mysqli_real_escape_string($con, $_POST['booking_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $location = mysqli_real_escape_string($con, $_POST['location']); 
        $guests = mysqli_real_escape_string($con, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($con, $_POST['arrivals']);
        $leaving = mysqli_real_escape_string($con, $_POST['leaving']);

        $query = "UPDATE SET book_form name='$name', email='$email', phone='$phone', address='$address, location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving' WHERE id='$booking_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run) {
          $_SESSION['message'] = "Booking Update Successfully...!";
          header('location:bookings.php');
              exit(0);
        } 
        else{
          $_SESSION['message'] = "Booking Not Update...!";
          header('location:index.php');
          exit(0);
       }
   }




   if(isset($_POST['save_booking'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $location = mysqli_real_escape_string($con, $_POST['location']); 
        $guests = mysqli_real_escape_string($con, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($con, $_POST['arrivals']);
        $leaving = mysqli_real_escape_string($con, $_POST['leaving']);

      $query = " INSERT INTO book_form(name,email,phone,address,location,guests,arrivals,leaving) VALUES
                ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      
      $query_run = mysqli_query($con, $query);
      
      if($query_run) {
        $_SESSION['message'] = "Booking Created Successfully...!";
        header('location:add_booking.php');
            exit(0);
      } 
      else{
        $_SESSION['message'] = "Booking Not Created...!";
        header('location:index.php');
        exit(0);
     }
   }

?>