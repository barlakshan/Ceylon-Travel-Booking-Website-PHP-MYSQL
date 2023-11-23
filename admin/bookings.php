<?php
    session_start();
    require '../db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to admin</title>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="index.php" class="logo">Ceylon Travel.</a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php">
                <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="act">
                <i class='bx bx-bookmarks' ></i>
                    <span class="link_name">Bookings</span>
                </a>
            </li>
            <li>
                <a href="inquiries.php">
                <i class='bx bx-conversation' ></i>
                    <span class="link_name">Inquiries</span>
                </a>
            </li>
            <li>
                <a href="profile.php">
                <i class='bx bx-user-pin' ></i>
                    <span class="link_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="lout()">
                <i class='bx bx-log-out'></i>
                    <span class="link_name">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard ">Booking</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search-alt-2' ></i>
            </div>
            <div class="profile-details">
                <i class='bx bxs-user-circle'></i>
                <span class="admin-name">Lakshan</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <!-- home comtent -->
        <div class="home-content">
        <div class="second-box">
        <div class="container mt-5">

        <?php include('../message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Booking Details
                            <a href="../add_booking.php" class="btn btn-primary float-end">Add New Booking</a>
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
                                                    <a href="view_booking.php?id=<?= $booking['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit_booking.php?id=<?= $booking['id']; ?>" class="btn btn-success btn-sm">Accept</a>
                                                    <form action="run.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_booking" value="<?=$booking['id'];?>" class="btn btn-danger btn-sm">Delete</button>
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

    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
</body>
</html>