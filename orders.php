<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>My Orders || PIT STOP</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="vendor/animate/animate.css">
   <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/maicons.css">
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
              <a href="orders.php" class="nav-link" style="color:#FCA043">My Orders</a>
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
                  echo '<li class="nav-item">
                          <a href="login.php" class="nav-link" style="color:#FCA043">Log In</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a href="register.php" class="nav-link">Register</a>
                        </li>';
                }
                ?>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav>



     <main>       
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>My COD Orders</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>
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





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
