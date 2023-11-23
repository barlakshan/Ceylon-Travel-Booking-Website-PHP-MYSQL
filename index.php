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
            <a href="#"><i class="fas fa-envelope"></i> info@cylontravel.lk</a>
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
        <a href="index.php" class="active">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="contact.php">contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section end-->

<!-- Home section start -->

<section class="home">

<div class="swiper home-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel arround the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

</section>
    
<!-- Home section end -->

<!-- home about search start -->

<section class="travel_booking" style="padding-bottom: 0px">
    <div class="search_boder" style="background: #57e30054; padding: 5rem;">
        <div>
            <label>Destination</label><br>
            <input type="text" id="input" placeholder="Where are you going?" class="search_field location" name="location" style="padding: 1rem 9.5rem; border-radius: 1rem;">
        </div>
        <div>
            <label>Date</label><br>
            <input type="date" placeholder="Add date" class="search_field" name="date" style="padding: 1rem 5rem; border-radius: 1rem;">
        </div>
        <div>
            <label>Check out</label><br>
            <input type="date" placeholder="Add date" class="search_field" name="check_out_date" style="padding: 1rem 5rem; border-radius: 1rem;">
        </div>
            <button>BOOKING</button>
    </div>
</section>

<!-- home about search end -->

<!-- home about section start -->

<section class="home-about">

    <div class="image">
        <img src="images/about-img.webp" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Sri Lanka is one of the leading romantic destinations in the whole world. The land of serendipity brings spiritual tranquility and a chance to rediscover oneself. The beauty of this tiny island is simply breath-taking. Known for its enchanting ancient ruins, endless soft-sanded beaches, imposing mountains, colourful festivals, tempting water sports, dense wild-life, diverse ethnical groups and off the top hospitality from the local residents, Sri Lanka is bound to make you come back again. Sri Lanka Travel and Tourism brings all of this for you right under your fingertips so that you can discover the serene island for yourself. - Sri lanka Travel and Tourism 2022- Best time to visit Sri Lanka</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!-- home about section end -->

<!-- home packages section start -->

<section class="home-packages">

    <h1 class="heading-title"> our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Adventure tours in Sri Lanka are a type of niche tourism and which may require special skills and physical exertion!</p>
                <h2>$399.00</h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Family & Tour Package</h3>
                <p>A Family Holiday To Sri Lanka Is A Wonderful Choice And A Fantastic Learning Experience For Kids!</p>
                <h2>$279.99</h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hot Air Balloon Ride</h3>
                <p>Enjoy An Unforgettable Hot Air Balloon Ride Over Sri Lanka! The Tour Is Fun And Come Along To Embark On An Unforgettable Hot Air Balloon Ride!</p>
                <h2>$599.99</h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

<!-- home packages section start -->

<!-- homw offer section -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Welcome to all of you who joined hands with us...!</p>
         <a href="book.php" class="btn">book now</a>
    </div>
</section>


<!-- homw offer section -->












<!-- footer section start -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
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
            <a href="#"><i class="fas fa-envelope"></i> info@cylontravel.lk</a>
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