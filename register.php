<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Register || PIT STOP</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/maicons.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
   <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="index.php" title="">
          <img src="images/logo.png" class="navbar-logo-img" alt="">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item ">
              <a href="products.php" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="services.php" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="orders.php" class="nav-link">My Orders</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <?php

                if(isset($_SESSION['username'])){
                  echo '<li class="nav-item">
                          <a href="account.php" class="nav-link">My Account</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a href="logout.php" class="nav-link">Log Out</a>
                        </li>';
                }
                else{
                  echo '<li class="nav-item ">
                          <a href="login.php" class="nav-link">Log In</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a href="register.php" class="nav-link" style="color:#FCA043">Register</a>
                        </li>';
                }
                ?>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav>




    <main>         
    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row form">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Akas" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Attar" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Address" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Jakarta" name="city">
            </div>
          </div>
          <!-- <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="400056" name="pin">
            </div>
          </div> -->
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="example@email.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #FCA043; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #FCA043; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
    </main>   


    <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
        <a class="navbar-brand" href="index.php" title="">
          <img src="images/logo.png" class="navbar-logo-img" alt="">
        </a>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" style="color:white;">Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" >Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" style="color:white;">Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>© Copyright PITSTOP. All Rights Reserved</p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>            
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="js/google-maps.js"></script>

    <script src="js/theme.js"></script>   



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
