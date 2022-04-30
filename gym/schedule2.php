<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PONIGYM | Schedule</title>

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
                        <li class="active"><a href="./schedule2.php">Schedule</a></li>
                        <li><a href="./appointment2.php">Appointment</a></li>
                        <li><a href="./contact2.php">Contacts</a></li>
                        
                        <li><a href="./profile.php"><?php echo $_SESSION['Login']; ?></a></li>
                        <li><a href="./index.php">Log out</a></li>
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
                    <br><h2>Schedule</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

    <!-- Trainer Table Schedule Section Begin -->
    <section class="trainer-schedule class-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Program Timetable</h2>
                        <div class="nav-controls">
                            <ul class="schedule-filter">
                                <li class="active" data-tsfilter="all">All Class</li>
                                <li data-tsfilter="yoga">Low Intensity Program</li>
                                <li data-tsfilter="cardio">Medium Intensity Program</li>
                                <li data-tsfilter="body">High Intensity Program</li>
                                <li data-tsfilter="gym">Athlete-level Intensity Program</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time">10.00</td>
                                    <td class="gym ts-item" data-tsmeta="gym">
                                        <h6>Athlete-level Intensity Program</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            David Bryant
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="yoga ts-item" data-tsmeta="yoga">
                                        <h6>Low Intensity Program</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            Olivia Skye
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="body ts-item" data-tsmeta="body">
                                        <h6>High Intensity Program</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            Chris Miliano
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="cardio ts-item" data-tsmeta="cardio">
                                        <h6>Medium Intensity Program</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            Noah Jordan
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">14.00</td>
                                    <td></td>
                                    <td class="running ts-item" data-tsmeta="running">
                                    </td>
                                    <td></td>
                                    <td class="box ts-item" data-tsmeta="box">
                                    </td>
                                    <td></td>
                                    <td class="gym ts-item" data-tsmeta="gym">
                                        <h6>Athlete-level Intensity Program</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name">
                                            David Bryant
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">16.00</td>
                                    <td class="cardio ts-item" data-tsmeta="cardio">
                                        <h6>Medium Intensity Program</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            Noah Jordan
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="gym ts-item" data-tsmeta="gym">
                                        <h6>Athlete-level Intensity Program</h6>
                                        <span>16.00 - 19.00</span>
                                        <div class="trainer-name">
                                            David Bryant
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="yoga ts-item" data-tsmeta="yoga">
                                        <h6>Low Intensity Program</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            Olivia Skye
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="gym ts-item" data-tsmeta="gym">
                                        <h6>Athlete-level Intensity Program</h6>
                                        <span>16.00 - 20.00</span>
                                        <div class="trainer-name">
                                            David Bryant
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">18.00</td>
                                    <td class="box ts-item" data-tsmeta="box">
                                       
                                    </td>
                                    <td class="body ts-item" data-tsmeta="body">
                                        <h6>High Intensity Program</h6>
                                        <span>18.00 - 20.00</span>
                                        <div class="trainer-name">
                                            Chris Miliano
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="crossfit ts-item" data-tsmeta="crossfit">
                                        
                                    </td>
                                    <td></td>
                                    <td class="cardio ts-item" data-tsmeta="cardio">
                                        <h6>Medium Intensity Program</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name">
                                            Noah Jordan
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">20.00</td>
                                    <td></td>
                                    <td class="gym ts-item" data-tsmeta="">
                                        <h6>Athlete-level Intensity Program</h6>
                                        <span>20.00 - 12.00</span>
                                        <div class="trainer-name">
                                            David Bryant
                                        </div>
                                    </td>
                                    <td class="body ts-item" data-tsmeta="">
                                        <h6>High Intensity Program</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name">
                                            Chris Miliano
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="cardio ts-item" data-tsmeta="">
                                        <h6>Medium Intensity Program</h6>
                                        <span>20.00 - 22.00</span>
                                        <div class="trainer-name">
                                            Noah Jordan
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="crossfit ts-item" data-tsmeta="">
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Table Schedule Section End -->

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
            </div>
        </div>
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
</body>

</html>