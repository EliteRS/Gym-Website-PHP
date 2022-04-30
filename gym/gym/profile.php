<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PONIGYM | Profile</title>

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
    <header class="header-section header-normal">
        <div class="container">
            <div class="logo">
                <a href="./index2.php">
                    <img src="img/logo-normal1.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index2.php">Home</a></li>
                        <li><a href="./about-us2.php">About</a></li>
                        <li><a href="./schedule2.php">Schedule</a></li>
                        <li><a href="./appointment.php">Appointment</a></li>
                        <!-- <li><a href="./blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="./contact2.php">Contacts</a></li>
                        <li class="active"><a href="./profile.php"><?php echo $_SESSION['Login']; ?></a></li>
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

    <!-- Site Breadcrumb Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">
                        <br><h2>Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

<!-- Services Section Begin -->
<section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                        <img src="img/anonymous1.png" width="200" height="200" >
                </div>

                <div class="col-lg-6">
                
                    <div class="section-title">
                        
                        <?php 
                        $uname = $_SESSION['Login'];
                        $con = mysqli_connect("localhost","root","","fitnessgymdb");
                        $query = "Select * from customer where username = '$uname'";
                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);

                        echo "<h2>".$row['fname']." ".$row['lname']."</h2>
                        <h4>Username: ".$uname."</h4>";
                        ?>
                    </div>
                    <?php 
                        $con = mysqli_connect("localhost","root","","fitnessgymdb");
                        $query = "Select * from customer where username = '$uname'";
                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);

                        echo "<h3>Birthdate: ".$row['birthdate']."</h3><br>";
                        if($row['gender']=='M')
                            echo "<h3>Gender: Male</h3><br>";
                        else
                            echo "<h3>Gender: Female</h3><br>";
                        
                        echo "<h3>Weight: ".$row['weight']." kg</h3> <br>
                        <h3>Height: ".$row['height']." cm</h3> <br>
                        <h3>BMI: ".$row['bmi']."</h3>";
                        ?>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LDR GYM<a href="https://colorlib.com" target="_blank"></a>
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
</body>

</html>