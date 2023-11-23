<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    
</head>
<body>
<!-- Header section start-->
<section class="top-header">
        <div class="flx1">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#" style=" border-right: 1px solid rgb(255 255 255 / 71%); margin: 10px; "><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fas fa-envelope"></i> info@travel.lk</a>
        </div>
        <div class="flx2"> 
            <a href="#" style=" border-right: 1px solid rgb(255 255 255 / 71%); margin: 10px; "><i class="fas fa-phone"></i> +94-767-727-839</a>
            <a id="nav-book" class="a" href="admin.php" style=" border-right: 1px solid rgb(255 255 255 / 71%); margin: 10px; ">Login</a>
            <a id="nav-book" class="a" href="admin.php">Sign in</a>
        </div>
</section>
<section class="header">
    <a href="index.php" class="logo">Ceylon Travel.</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php" class="active">package</a>
        <a href="contact.php">contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section end-->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section start -->

<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>accepted cards :</span><br>
                <img src="images/card_img.png" alt="">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>name on card :</span>
                <input type="text" placeholder="enter your name on card" name="card_name" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="tel" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>credit card number :</span>
                <input type="tel" placeholder="enter your credit card number" name="card_number" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>exp month :</span>
                <input type="text" placeholder="enter expior month" name="exp_month" required>
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <!-- <input type="text" placeholder="pleas you want to visit" name="location" location> -->
                <select name="location" id="location" location>
                <option disabled="disabled" selected="disabled">--Select Tour Package--</option>
                    <option value="adventure & tour Package">adventure & tour Package</option>
                    <option value="family & tour Package">family & tour Package</option>
                    <option value="Hot Air Balloon Ride">Hot Air Balloon Ride</option>
                    <option value="Luxury & tour Package">Luxury & tour Package</option>
                    <option value="Day Tour of Colombo">Day Tour of Colombo</option>
                    <option value="Yala National Park">Yala National Park</option>
                    <option value="Honeymoon holiday">Honeymoon holiday</option>
                    <option value="Ayurveda Wellness tour">Ayurveda Wellness tour</option>
                    <option value="Sri Lanka Cycling Tour">Sri Lanka Cycling Tour</option>
                    <option value="Tea trails tour">Tea trails tour</option>
                    <option value="Whale Watching Day tour">Sri Lanka Dive & tour</option>
                </select>
            </div>
            <div class="inputBox">
                <span>exp year :</span>
                <input type="tel" placeholder="enter expior year" name="exp_year" required>
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="text" placeholder="number of guests" name="guests" required>
                
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" placeholder="enter your city" name="city" required>
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving" required>
            </div> <br>
            <div class="col-pay">
            <div class="inputBox">
                <span>state :</span>
                <input type="text" placeholder="enter your state" name="state" required>
            </div>
            <div class="inputBox">
                <span>zip cord :</span>
                <input type="text" placeholder="enter your zip cord" name="zip" required>
            </div>
            <div class="inputBox">
                <span>CVV :</span>
                <input type="text" placeholder="enter your CVV number" name="cvv" required>
            </div>
            </div>
        </div>
        <input type="submit" value="Proceed To Checkout" class="btn" name="send">
    </form>

</section>

<!-- booking section start -->













<!-- footer section start -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="admin.php"><i class="fas fa-angle-right"></i> Login</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> turms and conditions</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +94-767-727-839</a>
            <a href="#"><i class="fas fa-phone"></i> +11-333-255-666</a>
            <a href="#"><i class="fas fa-envelope"></i> info@travel.lk</a>
            <a href="#"><i class="fas fa-map"></i> Ceylon travel. kings road, matara, Sri lanka.</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>
    <div class="credit">created by <span>B.A.R.Lakshan-IT2020002</span> | all rights reseved!</div>
</section>



<!-- footer section end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>