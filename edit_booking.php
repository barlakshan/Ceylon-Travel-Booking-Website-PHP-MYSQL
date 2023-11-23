<?php
session_start();
require 'db_connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Boocking</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Boocking
                            <a href="book_details.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                      <?php
                        if(isset($_GET['id']))
                        {
                            $booking_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM book_form WHERE id='$booking_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0){
                                $booking = mysqli_fetch_array($query_run);
                                ?>
                                <form action="add_booking_form.php" method="POST">
                                    <input type="hidden" name="booking_id" value="<?= $booking_id['id']; ?>">
               
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?= $booking['name'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $booking['email'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" value="<?= $booking['phone'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?= $booking['address'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Where To</label>
                                        <input type="text" name="location" value="<?= $booking['location'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>how many</label>
                                        <input type="number" name="guests" value="<?= $booking['guests'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Arrivals</label>
                                        <input type="date" name="arrivals" value="<?= $booking['arrivals'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Leaving</label>
                                        <input type="date" name="leaving" value="<?= $booking['leaving'];?> class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_booking" class="btn btn-primary">Update Booking</button>
                                    </div>

                                </form>

                                <?php
                            }
                            else{
                                echo"fail";
                            }
                        }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>