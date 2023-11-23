<?php
require '../db_connection.php';
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


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Boocking Details
                            <a href="bookings.php" class="btn btn-danger float-end">BACK</a>
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
               
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <p class="form-control">
                                            <?= $booking['name'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?= $booking['email'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?= $booking['phone'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?= $booking['address'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Where To</label>
                                        <p class="form-control">
                                            <?= $booking['location'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>how many</label>
                                        <p class="form-control">
                                            <?= $booking['guests'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Arrivals</label>
                                        <p class="form-control">
                                            <?= $booking['arrivals'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Leaving</label>
                                        <p class="form-control">
                                            <?= $booking['arrivals'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="#" class="btn btn-success">Accept Booking</button>
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