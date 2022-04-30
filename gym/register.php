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
                <a href="./index.php">
                    <img src="img/logo-normal1.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li><a href="./schedule.php">Schedule</a></li>
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
                    <h2>Register</h2>
                </div>
            </div>
            <div class="form-group" >
              <input type="text" class="form-control" name="first_name" aria-describedby="Username" placeholder="First Name" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group" >
              <input type="text" class="form-control" name="last_name" aria-describedby="Username" placeholder="Last Name" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group" >
            <label for="birthday">Birthdate:</label>
              <input type="date" class="form-control" id="birthday" name="birthdate" aria-describedby="Username" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group" >
              <input type="text" class="form-control" name="gender" aria-describedby="Username" placeholder="Gender" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group" >
              <input type="number" class="form-control" name="weight" aria-describedby="Username" placeholder="Weight: in kg" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group" >
              <input type="number" class="form-control" name="height" aria-describedby="Username" placeholder="Height: in cm" style="border:2px #212020 solid;" required>
            </div>
            <br><br>
            <div class="form-group" >
              <input type="text" class="form-control" name="username" aria-describedby="Username" placeholder="Username" style="border:2px #212020 solid;" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" style="border:2px #212020 solid;" required>
            </div>
        
            <button type="submit" class="btn btn-primary" name="Submit" style="margin-top: 1rem;background-color:#212020; border:none" onclick="IsRememberMe()">Register</button>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LDR GYM<a href="https://colorlib.com" target="_blank"></a>
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
    $con = mysqli_connect("localhost","root","","fitnessgymdb");
    $err="";
    if($con){
        if(isset($_POST['Submit'])){
            $query = "Select * from customer where username = '".$_POST['username']."'";
            $result = mysqli_query($con,$query);
		    $count = mysqli_num_rows($result);

            if($count==0){
                $uname = $_POST['username'];
                $pwd = $_POST['password'];
                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $birthdate = $_POST['birthdate'];
                $gender = $_POST['gender'];
                $weight = $_POST['weight'];
                $height = $_POST['height'];
                $convertHeight = $height/100;
                $sqr_height = $convertHeight * $convertHeight;
                $bmi = $weight / $sqr_height;
                $final_bmi = round($bmi, 2);
                $insert = "INSERT INTO customer values ('$uname', '$pwd', '$fname', '$lname', '$birthdate', '$gender', '$weight', '$height', $final_bmi)";
                mysqli_query($con,$insert);
                //header("Location:index.php#contact");
                echo "<script language='javascript'> window.location.href='login.php';</script>";
            }else{
                echo "<script language='javascript'> alert('username already exists');</script>";
            }
        }
    }else{
        echo "Error";
    }
?>