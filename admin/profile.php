<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                <a href="bookings.php">
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
                <a href="profile.php" class="act">
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
            <span class="dashboard">Dashboard</span>
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

    <div class="profile-boxes">
        <div class="box_margin">
            <div class="pro_img">
                <img src="img/profile-img.png" alt="">
                <h2>Ravindu Lakshan</h2>
                <p>ravindu.ba.lakshan@gmail.com</p>
                <p>Sri Lanka</p>
            </div>
            <div class="pro_content">
                <p></p>
            </div>
        </div>
    </div>
<section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="script.js"></script>
    
</body>
</html>