<?php
    session_start();
    require 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add New Booking</title>
  </head>
  <body>
    
  <section>
        <div class="container mt-5 mb-5">

<?php include('message.php'); ?>

<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Add New Boocking
                <a href="admin/bookings.php" class="btn btn-danger float-end"">BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="add_booking_form.php" method="POST">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="tel" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Where To</label>
                    <input type="text" name="location" class="form-control">
                </div>

                <div class="mb-3">
                    <label>how many</label>
                    <input type="number" name="guests" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Arrivals</label>
                    <input type="date" name="arrivals" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Leaving</label>
                    <input type="date" name="leaving" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" name="save_booking" class="btn btn-primary">Save Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

        </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>