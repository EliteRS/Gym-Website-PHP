<?php session_start();?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LDR FITNESS GYM | Home</title>

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
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index2.php">
                    <img src="img/logo2.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index2.php">Home</a></li>
                        <li><a href="./about-us2.php">About</a></li>
                        <li><a href="./schedule2.php">Schedule</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-1.jpg">
                <div class="container">
                    <div class="hero-text">
                        
                        <h1>Make it <span>Shape</span></h1>
                        <a href="./appointment2.php" class="primary-btn">Join Us Now</a>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-2.jpg">
                <div class="container">
                    <div class="hero-text">
                        
                        <h1>Make it <span>Happen</span></h1>
                        <a href="./appointment2.php" class="primary-btn">Join Us Now</a>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-3.jpg">
                <div class="container">
                    <div class="hero-text">
                       
                        <h1>Just Do <span>it</span></h1>
                        <a href="./appointment2.php" class="primary-btn">Join Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Program</h2>
                        <p>Our dedicated LDR Fitness Gym areas and fitness experts can help you discover new training
                                techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                    </div>
                    <div class="services-items">
                        <div class="single-service-item">
                            <img src="img/icon-1.png" alt="">
                            <h5>Weight Lifting</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-1">
                            <img src="img/icon-2.png" alt="">
                            <h5>Body Building</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-2">
                            <img src="img/icon-3.png" alt="">
                            <h5>Healthy</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-3">
                            <img src="img/icon-4.png" alt="">
                            <h5>Yoga</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="service-video set-bg" data-setbg="img/video-bg.jpg">
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=gey73xiS8F4" class="service-video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section set-bg spad" data-setbg="img/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Start your Journey with our exciting offers</h2>
                    <a href="./appointment2.php" class="primary-btn">Join With Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->

    <!-- Class Section Begin-->
    <section class="class-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2>Our Class</h2>
                                <p>Our fitness experts can help you discover new training techniques and exercises that
                                    offer a dynamic and efficient full-body workout.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-item">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="class-1" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Body Building</h3>
                                                        <p>Body Building will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your class
                                                            here.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-2" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Racing Running</h3>
                                                        <p>Running is an excellent way to strengthen 
                                                        the heart and ensure the efficient flow of blood and oxygen 
                                                        throughout the body, which helps decrease your risk of a heart attack. 
                                                        running does not give you a license to eat anything you want. 
                                                        The basic rule of weight loss is that you must burn 
                                                        more calories than you take in.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-3" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Yoga Fitness</h3>
                                                        <p>Yoga can help you get fit for life. 
                                                        It helps you deal with stress, pick up your child, 
                                                        control your dog, carry groceries, or work in your garden. 
                                                        It also can help to prevent or ease back pain and muscle or 
                                                        joint injury, and give you self-reliance and self-esteem.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-4" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Kick Boxing</h3>
                                                        <p>Kickboxing training strengthens and stretches your whole body. 
                                                        While kicking and holding your body weight with one leg will 
                                                        definitely strengthen your legs, punching and blocking also improve 
                                                        your balance and upper body strength. Kickboxing training also typically 
                                                        includes at least some weight training.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-5" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Cardio Workout</h3>
                                                        <p>If you are new to working out or returning to the gym, 
                                                        deciding what kind of exercises you should do can be 
                                                        overwhelming. While it doesn’t hurt to try a little bit 
                                                        of everything, there are some exercises that will be more 
                                                        beneficial toward your goals. For instance, cardio is one 
                                                        of the best and most popular types of exercises people perform. 
                                                        However, a lot of people also despise cardio in any form. 
                                                        Even though you may not find the physical activity of cardio 
                                                        enjoyable, it has a lot of major health benefits.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-6" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/class-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Martial Arts</h3>
                                                        <p>Martial arts teach you both successful offense as well 
                                                        as successful defense, when to attack and when to retreat. 
                                                        These concepts are just as applicable in the ring as they 
                                                        are the board room. The martial arts will help you find a 
                                                        way to flow with the current, and though it.</p>
                                                        <a href="./schedule2.php" class="schedule-btn">View Schedule <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-author">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a data-toggle="tab" class="active" href="#class-1" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-1.jpg" alt="">
                                                <h5>Body Building</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-2" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-2.jpg" alt="">
                                                <h5>Racing Running</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-3" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-3.jpg" alt="">
                                                <h5>Yoga Fitness</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-4" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-4.jpg" alt="">
                                                <h5>Kick Boxing</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-5" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-5.jpg" alt="">
                                                <h5>Cardio Workout</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-6" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/author-6.jpg" alt="">
                                                <h5>Martial Arts</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Section End -->

    <!-- Trainer Table Schedule Section Begin -->
    <section class="trainer-schedule set-bg spad" data-setbg="img/trainer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Schedule</h2>
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

    <!-- Team Section Begin -->
    <section class="about-page-trainer spad">
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
                            <h5>Olivia Skye</h5>
                            <span>Yoga Trainer</span>
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
                            <h5>Noah Jordan</h5>
                            <span>Body Builder Trainer</span>
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
                            <h5>Chris Miliano</h5>
                            <span>Fitness Trainer</span>
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
                            <h5>David Bryant</h5>
                            <span>Martial Arts Trainer</span>
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
    </section> 
    <!-- Team Section End -->

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
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LDR GYM<a href="https://colorlib.com" target="_blank"></a>
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li>Privacy Policy</li>
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