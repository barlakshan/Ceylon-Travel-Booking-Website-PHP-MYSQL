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
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"
    ></script>
    
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
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="contact.php" class="active">contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section end-->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
    <h1>Contact us</h1>
</div>

<!-- contact section start -->

<section class="contact">

<div class="container">
    <div class="contact-box">
        <div class="left">
            <div class="box">
                <div class="icon"><i class="fas fa-map"></i>
                    <div class="text-info">
                        <h3>Address :</h3>
                        <p> Travel. kings road, matara, Sri lanka.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-phone"></i>
                    <div class="text-info">
                        <h3>Telephone :</h3>
                        <p> +11-333-255-666</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-envelope"></i>
                    <div class="text-info">
                        <h3>Email</h3>
                        <p> info@travel.lk</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <h3>Contact Us</h3>
            <form action="#" method="post" name="formValidation" id="formValidation">
                <input type="text" class="field" placeholder="enter your name" name="name" id="name" required>
                <!-- <span id="nameerror" style="color: red">Name must only contain characters from the alphabet</span> -->
                <input type="email" class="field" placeholder="enter your email" name="email" id="email" required>
                <!-- <span id="mailerror" style="color: red">Your email must be a valid email</span> -->
                <input type="tel" class="field" placeholder="enter your number" name="phone" id="mno" required>
                <!-- <span id="mnoerror" style="color: red">Please enter the mobile number</span> -->
                <input type="text" class="field" placeholder="enter your address" name="address" id="address" required>
                <!-- <span id="adderror" style="color: red">Please enter the address</span> -->
                <input type="text" class="field" placeholder="pleas you want to visit" name="location" id="location" required>
                <!-- <span id="locerror" style="color: red">Please enter you want to visit place</span> -->
                <textarea name="message" rows="4" cols="50" class="field" placeholder="Type something you want....." required></textarea>
                <button class="submit btn" name="send_inquiry" value="submit">Send</button>
            </form>
        </div>
    </div>
</div>

</section>

<!-- contact section end -->
<section class="map">
    <div class="container">
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63470.73522670464!2d81.08147166926929!3d6.141320701850154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae6bcffa57235f7%3A0x36c4af58943f2152!2sHambantota!5e0!3m2!1sen!2slk!4v1671342683393!5m2!1sen!2slk" 
              width="100%" 
              height="450" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
    </div>
</section>






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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>