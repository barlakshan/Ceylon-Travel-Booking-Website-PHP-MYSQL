<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel. admin</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="login">
        <div class="container">
            <div class="lock">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </div>
            <form action="login_form.php" method="post" style="margin-top: 4rem;">
                <div class="form_input">
                    <input type="text" name="username" placeholder="Enter your user name" />
                </div>
                <div class="form_input">
                    <input type="password" name="password" placeholder="Enter your user name" />
                </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login" style="margin: 12px;"/>
            </form>
            <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Back to Home</a>
        </div>
    </section>
</body>
</html>