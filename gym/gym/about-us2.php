<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LDR FITNESS GYM | About us</title>

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
                        <li class="active"><a href="./about-us2.php">About</a></li>
                        <li><a href="./schedule2.php">Schedule</a></li>
                        <li><a href="./appointment2.php">Appointment</a></li>
                        <!-- <li><a href="./blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="./contact2.php">Contacts</a></li>
                        <li><a href="./profile.php"><?php echo $_SESSION['Login']; ?></a></li>
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
                        <br><h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

    <!-- About Us Secion Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-pic">
                        <img src="img/about-us.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Welcome to LDR Fitness Gym</h2>
                        </div>
                        <p>No matter what you’re looking for in a gym, we’ve got a 
                        membership option made for you. All Planet Fitness members 
                        enjoy unlimited access to their home club and the support of 
                        our friendly, knowledgeable staff anytime you need it.Looking for a 
                        little extra guidance or inspiration to help you meet your fitness goals? 
                        As a LDR member, you can take advantage of our free fitness training or 
                        find your motivation by reading real member experiences on LDR Gym.

                        It’s our goal to provide a clean, safe, 
                        welcoming environment for anyone who walks 
                        through our door, and all the equipment, amenities 
                        and support you need once you’re here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Secion End -->

    <!-- Why Chose Us Section Begin -->
    <section class="choseus-section set-bg spad" data-setbg="img/chose-us-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why Choose Us</h2>
                        <p>At LDR Gym, credentialed expert fitness coaches will
                        help improve your health and fitness while accomplishing your goals. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="chose-items">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-crown"></i>
                            <h5>THE CROWN TO HEALTH AND FITNESS</h5>
                            <p>LDR Gym is a lifestyle characterized by safe, 
                            effective exercise and sound nutrition. LDR Gym can be 
                            used to accomplish any goal, from improved health to weight 
                            loss to better performance. The program works for everyone — 
                            people who are just starting out and people who have trained for years.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-package"></i>
                            <h5>THE WORKOUTS</h5>
                            <p>The magic is in the movement. 
                            LDR Gym workouts are different every day 
                            and can be modified to help each athlete achieve 
                            their goals. The workouts may be adapted for people 
                            at any age and level of fitness.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-shopping-cart"></i>
                            <h5>THE LIFESTYLE</h5>
                            <p>Off the carbs, off the couch. The LDR lifestyle — 
                            a combination of sound nutrition and exercise — is the key 
                            to fitness and long-term health.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-user"></i>
                            <h5>THE COMMUNITY</h5>
                            <p>Your support network. At thousands of affiliates 
                            around the world, people encourage and motivate each 
                            other in every class as they work toward their goals. 
                            Start training with friends. Make new friends. The fun 
                            is in the community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Chose Us Section End -->

    <!-- About Page Trainer Section Begin -->
    <!-- <section class="about-page-trainer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Our Trainer</h2>
                            <p>Our fitness experts can help you discover new training techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item">
                        <div class="trainer-pic">
                            <img src="img/trainer/trainer-1.jpg" alt="">
                        </div>
                        <div class="trainer-text">
                            <h5>Noah Leonard</h5>
                            <span>Gymer</span>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item">
                        <div class="trainer-pic">
                            <img src="img/trainer/trainer-2.jpg" alt="">
                        </div>
                        <div class="trainer-text">
                            <h5>Noah Leonard</h5>
                            <span>Gymer</span>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item">
                        <div class="trainer-pic">
                            <img src="img/trainer/trainer-3.jpg" alt="">
                        </div>
                        <div class="trainer-text">
                            <h5>Noah Leonard</h5>
                            <span>Gymer</span>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item">
                        <div class="trainer-pic">
                            <img src="img/trainer/trainer-4.jpg" alt="">
                        </div>
                        <div class="trainer-text">
                            <h5>Noah Leonard</h5>
                            <span>Gymer</span>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- About Page Trainer Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15702.076335018537!2d123.87073153561207!3d10.300278344276713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99ea9f188d865%3A0x31ab47369f9dc75b!2sLabangon%2C%20Cebu%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1621874534480!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="map-widget">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-address">
                                <img src="img/map-location.jpg" alt="">
                                <ul class="map-text">
                                    <li><span>Address:</span> Labangon, Box 283, Cebu</li>
                                    <li><span>Phone:</span> 12-456-791</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Request A Call Back</h2>
                                    <p>Shape your body and burn fat with strength training. With the right equipment
                                        such as free weights or resistance machines.</p>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Subject">
                                            <textarea placeholder="Message"></textarea>
                                            <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LDR GYM <a href="https://colorlib.com" target="_blank"></a>
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