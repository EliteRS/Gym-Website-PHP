<?php session_start(); ?>
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
                        <li class="active"><a href="./appointment.php">Appointment</a></li>
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
                        <br><h2>Appointment</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

    <!-- About Us Secion Begin -->
    <!-- <section class="about-us-section spad">
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
                            <h2>Welcome to LDR Fitness Gym </h2>
                            <p>Our dedicated LDR Fitness Gym  areas and fitness experts can help you discover new training
                                techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                        </div>
                        <p>Our fitness experts can help you discover new training techniques. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- About Us Secion End -->

    <!-- Why Chose Us Section Begin 
    <section class="choseus-section set-bg spad" data-setbg="img/chose-us-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why Choose Us</h2>
                        <p>Our fitness experts can help you discover new training techniques.</p>
                    </div>
                </div>
            </div>
            <div class="chose-items">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-crown"></i>
                            <h5>How do I become an author?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-package"></i>
                            <h5>Is my license transferable?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-shopping-cart"></i>
                            <h5>What do you mean by item?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-user"></i>
                            <h5>Top notch customer support</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Why Chose Us Section End -->

    <!-- About Page Trainer Section Begin -->
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
                            <h5>Noah Jordan</h5>
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
                            <h5>Chris Miliano</h5>
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
                            <h5>David Bryant</h5>
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
    </section> 


				<!-- <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<form action="process.php" id="form-wrap" method="POST">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="row form-group">
							<div class="col-md-12">
								<label>Your Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">E-mail</label>
								<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter E-mail">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="phone">Phone number</label>
								<input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" placeholder="Enter phone number">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="guest">Number of guests</label>
								<input type="text" name="guests" class="form-control" value="<?php echo $guests; ?>" placeholder="Enter number of guests">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="date">Date</label>
								<input type="text" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="yyyy-mm-dd">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="time">Time</label>
								<input type="text" name="time" class="form-control" value="<?php echo $time; ?>" placeholder="hr:min:sec in 24hr format">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
							<?php 
								if($update == true):
							?>
								<button type="submit" class="btn btn-info" name="update">Update</button>

							<?php else: ?>
								<button type="submit" class="btn btn-primary" name="save">Save</button>
							<?php endif; ?>
								
							</div>
						</div>

					</form>
				</div>
				
				
			</div>
		</div>
	</div> -->

    <!-- About Page Trainer Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="map-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-widget">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-address">
                                <img src="img/map-location.jpg" alt="">
                                <ul class="map-text">
                                    <li><span>Address:</span> Iris Watson, Box 283, NY</li>
                                    <li><span>Phone:</span> 12-456-791</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Appointment</h2>
                                    <p>Shape your body and burn fat with strength training. With the right equipment
                                        such as free weights or resistance machines.</p>
                                </div>

                                <!--appointment-->
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="cars" style="color:white">Choose your trainer:  </label>
                                                
                                                <select name="cars" id="cars">
                                                    <option value="Olivia">Olivia Skye</option>
                                                    <option value="Noah">Noah Jordan</option>
                                                    <option value="Chris">Chris Miliano</option>
                                                    <option value="David">David Bryant</option>
                                                </select>
                                            
                                            </div>

                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Program Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="color:white">Date of Appointment</p>
                                            <input class="form-control" type="date">
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="color:white">Time of Appointment</p>
                                            <input class="form-control" type="time">
                                        </div>
                                        
                                    <!--end of appoinment-->
                                        
                                        <div class="col-lg-12">
                                            <!-- <textarea placeholder="Message"></textarea> -->
                                            <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
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