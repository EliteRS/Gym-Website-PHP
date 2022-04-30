<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LDR FITNESS GYM | Appointment</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->

    <header class="header-section header-normal" >
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo-normal.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li><a href="./schedule.php">Schedule</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <!-- <li><a href="./blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="./contact.php">Contacts</a></li>
                        <li  class="active"><a href="./login.php">Login</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
       
    </div>
    </header>
    <!-- Header End -->

    <!-- log in -->
    <div class ="d-flex justify-content-center" style="flex-flow:row wrap;padding-top: 3rem;">
        <form method="post">
            <div class="form-group">
                <div class="title" style="padding-bottom:0">
                    <h2>Login</h2>
                </div>
            </div>
            <div class="form-group" >
              <input type="text" class="form-control" name="username" aria-describedby="Username" placeholder="Username" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" value="IsRememberMe" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="Submit" style="margin-top: 1rem;background-color:#212020; border:none" onclick="IsRememberMe()">Login</button>
            <button type="submit" class="btn btn-primary" name="Register" style="margin-top: 1rem;background-color:#212020; border:none"><a href="./register.php">Register</a></button>
            
          </form>
    </div>
	<!-- end of Login-->

    

    <!-- Footer Section Begin -->
    <br><br>
    <footer class="footer-section">
       
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li class="active">Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
	<div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        //AVOID RESUBMISSION FORM
             if ( window.history.replaceState ) {
                 window.history.replaceState( null, null, window.location.href );
             }
             $(document).ready(function() {
                 $("#sidebar").mCustomScrollbar({
                     theme: "minimal"
                 });
     
                 $('#dismiss, .overlay').on('click', function() {
                     $('#sidebar').removeClass('active');
                     $('.overlay').removeClass('active');
                 });
     
                 $('#sidebarCollapse').on('click', function() {
                     $('#sidebar').addClass('active');
                     $('.overlay').addClass('active');
                     $('.collapse.in').toggleClass('in');
                     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                 });
             });
         </script>
</body>

</html>
<?php
  $con =mysqli_connect("localhost","root","","fitnessgymdb");
  $err="";
  if($con){
    if(isset($_POST['Submit'])){
      $uname=$_POST['username'];
      $pwd=$_POST['password'];
      $query="select * from customer where username='$uname' and password='$pwd'";
      $result = mysqli_query($con,$query);
      $count = mysqli_num_rows($result);

      if($count ==0)
        echo "<div style='border:1px solid red;margin-top:20px;text-align:center;background-color:#fec1c1'>
            <h3 style='margin-top:5px'><b>Invalid Credentials</b></h3>
            </div>";
      else{
        $row=mysqli_fetch_assoc($result);
        $_SESSION['Login']=$row['username'];
        echo "<script language='javascript'> window.location.href='index2.php';</script>";
      }
    }
  }
?>