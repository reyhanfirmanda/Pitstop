<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Contact || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/maicons.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
   <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/theme.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/foundation.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="index.php" title="">
          <img src="images/logo.png" class="navbar-logo-img" alt="">
        </a>
        <!-- <a href="index.php" class="navbar-brand">PIT<span class="text-primary">STOP</span></a> -->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="services.php" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="orders.php" class="nav-link">My Orders</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link" style="color:#FCA043">Contact</a>
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
                          <a href="login.php" class="nav-link">Log In</a>
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
    <div class="maps-container mt-5">
      <div id="google-maps">
      <iframe src="https://maps.google.com/maps?q=west%20jakarta&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Stay in touch</h2>
          <p>Just say hello or drop us a line. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" method="post" class="form-contact">
              <div class="row">
                <div class="col-sm-6 py-2">
                  <label for="name" class="fg-grey">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name..">
                </div>
                <div class="col-sm-6 py-2">
                  <label for="email" class="fg-grey">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Email address..">
                </div>
                <div class="col-12 py-2">
                  <label for="subject" class="fg-grey">Subject</label>
                  <input type="text" class="form-control" id="subject" placeholder="Subject..">
                </div>
                <div class="col-12 py-2">
                  <label for="message" class="fg-grey">Message</label>
                  <textarea id="message" rows="8" class="form-control" placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    
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

<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/wow/wow.min.js"></script>

<script src="vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="js/google-maps.js"></script>

<script src="js/theme.js"></script>   

<script type="text/javascript">

    $(document).ready(function (){

        $('#loader, .success-msg').hide();

        $.validator.addMethod("regex", function(value, element, regexp){
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        }, "Invalid Validation Expression" );    

        $('#form-contact').validate({
            rules : {
                name : {
                    required : true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    regex : /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/,
                    minlength : 3,
                    maxlength : 100
                },
                subject : {
                    required : true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    regex : /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/,
                    minlength : 3,
                    maxlength : 200
                },
                email : {
                    required : {
                        depends: function () {
                            $(this).val($.trim($(this).val()));
                            return true;
                        }
                    },
                    maxlength : 100,
                    regex : /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                },
                phone : {
                    required : true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    regex : /^(1\s?)?((\([0-9]{3}\))|[0-9]{3})[\s\-]?[\0-9]{3}[\s\-]?[0-9]{4}$/
                },
                msg : {
                    required : true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    minlength : 3,
                    maxlength : 5000
                }

            },
            messages : {
                name : {
                    required : 'Please Enter Your Name',
                    minlength : 'Please Enter Valid Name',
                    maxlength : 'Only 100 Charater Allow',
                    regex : 'Only Number and Letters Allow'
                },
                subject : {
                    required : 'Please Enter Subject',
                    minlength : 'Please Enter Valid Subject Name',
                    maxlength : 'Only 200 Charater Allow',
                    regex : 'Only Number and Letters Allow'
                },
                email : {
                    required : 'Please Enter Email',
                    maxlength : 'Only 100 Charater Allow',
                    regex : 'Please Enter Valid Email Address'
                },
                phone : {
                    required : 'Please Enter Phone number',
                    regex : 'Please Enter Valid Number (US)' 
                },
                msg : {
                    required : 'Please Enter Message',
                    minlength : 'Please Enter Valid Message',
                    maxlength : 'Only 5000 Charater Allow'
                },

            },
            highlight: function (element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            },
            submitHandler: function () {

                $.ajax({

                    type : 'POST',
                    url : 'php/php-contact.php',
                    data : $('#form-contact').serialize(),
                    beforeSend : function(){
                        $('#loader').show();
                        $('#submit').hide();
                    },
                    complete : function(){
                        $('#loader').hide();
                        $('#submit').show();

                    },
                    success : function(response){

                        var get_data = JSON.parse(response);
                        if(get_data.status == 200){
                            
                            $('#form-contact').trigger("reset");
                            $("#name, #subject, #email, #phone, #msg").removeClass("is-valid");

                            $(".success-msg").delay(100).fadeIn( "slow", function (){
                                $(this).delay(2000).fadeOut("slow");
                            });

                            console.log(get_data.msg);

                        }
                        else{
                            console.log(get_data.msg);
                        }

                    }

                });

                return false;

            }
            
        });

    });

    </script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
