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

    <title>Booking Details</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Booking Details
                            <a href="add_booking.php" class="btn btn-primary float-end">Add New Booking</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Address</th> -->
                                    <th>Where To</th>
                                    <th>Guests</th>
                                    <th>Arrivals</th>
                                    <th>Leaving</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM book_form";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $booking)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $booking['id']; ?></td>
                                                <td><?= $booking['name']; ?></td>
                                                <td><?= $booking['email']; ?></td>
                                                <td><?= $booking['phone']; ?></td>
                                               
                                                <td><?= $booking['location']; ?></td>
                                                <td><?= $booking['guests']; ?></td>
                                                <td><?= $booking['arrivals']; ?></td>
                                                <td><?= $booking['leaving']; ?></td>
                                                <td>
                                                    <a href="student-view.php?id=<?= $booking['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit_booking.php?id=<?= $booking['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$booking['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>