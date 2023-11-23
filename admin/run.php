<?php 
session_start();
require '../db_connection.php';

// if(isset($_POST['delete_inquiries']))
// {
//     $booking_id = mysqli_real_escape_string($con, $_POST['delete_inquiries']);

//     $query = "DELETE FROM inquiry_form WHERE id='$booking_id' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Inquiry Deleted Successfully...!";
//         header('location:inquiries.php');
//         exit(0);
//     }
//     else{
//         $_SESSION['message'] = "Inquiry Not Deleted";
//         header('location:inquiries.php');
//         exit(0);
//     }
// };

if(isset($_POST['delete_booking']))
{
    $booking_id = mysqli_real_escape_string($con, $_POST['delete_booking']);

    $query = "DELETE FROM book_form WHERE id='$booking_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Booking Deleted Successfully...!";
        header('location:bookings.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Booking Not Deleted";
        header('location:bookings.php');
        exit(0);
    }
}

?>