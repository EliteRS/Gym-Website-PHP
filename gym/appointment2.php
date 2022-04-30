<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
                        <li class="active"><a href="./appointment2.php">Appointment</a></li>
                        <li><a href="./contact2.php">Contacts</a></li>
                        <li><a href="./profile.php"><?php echo $_SESSION['Login']; ?></a></li>
                        <li><a href="./index.php">Log Out</a></li>
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
                            <span>Low Intensity Program Trainer</span>
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
                            <span>Medium Intensity Program Trainer</span>
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
                            <span>High Intensity Program Trainer</span>
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
                            <span>Athlete-level Intensity Program Trainer</span>
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

    
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">
                        <div class="row">

                        <!---APPOINTMENT-->
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Appointment</h2>
                                    <p>Shape your body and burn fat with the right trainers and programs.</p>
                                </div>
                                <script>

                            </script>
                            
                                <form method="post">
                                    <div class="row" id="training">
                                        <div class="col-lg-6">
                                            <label style="color:white; margin-bottom:15px">Choose your Trainer:  </label>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="ddTitle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Trainer
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <?php
                                                        $con =mysqli_connect("localhost","root","","fitnessgymdb");
                                                        function getProgramName($con,$trainerID){
                                                            $query="SELECT programName FROM fitnessprogram WHERE trainerID = $trainerID";
                                                            $result=mysqli_query($con,$query);
                                                            $data=mysqli_fetch_assoc($result);
                                                            return $data['programName'];
                                                        }
                                                        if($con){
                                                            $queryGet = "SELECT * from fitnesstrainer";
                                                            $result = mysqli_query($con,$queryGet);
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                echo '<li><a class="dropdown-item" href="#training" onclick="setProgram(\''.getProgramName($con,$row['trainerID']).'\',\''.$row['trainer_fname'].=' '.$row['trainer_lname'].'\','.$row['trainerID'].')"> '.$row['trainer_fname'].' '.$row['trainer_lname'].'</a></li>';
                                                            }
                                                        } else {
                                                            die("Error"); 
                                                        }
                                                    ?>
                                                </ul>
                                                <input type="number" id="trID" name="traineeSelected" style="display:none">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="color:white">Program Name</p>
                                            <input class="form-control" type="text" id="progName" placeholder="Program Name" name="programName" disabled>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" name="btnAppoint" style="margin-top: 30px;">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                        <script>
                                            function setProgram(name,tName,tID){
                                            document.getElementById('progName').value=name;
                                            document.getElementById('ddTitle').innerHTML=tName;
                                            document.getElementById('trID').value=tID;
                                        }
                                        </script>
                                    <!---APPOINTMENT ENDS-->

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $con = mysqli_connect("localhost","root","","fitnessgymdb");

        if($con){
        if(isset($_POST['btnAppoint'])){
            
            $trainer = $_POST['traineeSelected'];
            $uname = $_SESSION['Login'];
            if(!empty($trainer && !empty($uname))){
                $queryProgram = "Select * from fitnessProgram where trainerID = '$trainer'";
                $resultProgram = mysqli_query($con,$queryProgram);
                
                $row = mysqli_fetch_assoc($resultProgram);
                
                $programID = $row['programID'];
                
                $queryAppointment = "INSERT INTO `appointment` (`username`, `trainerID`, `dateOfAppointment`, `timeOfAppointment`) VALUES ('$uname', '$trainer', CURRENT_DATE, CURRENT_TIME)";
                $insertAppointment = mysqli_query($con, $queryAppointment);
            }
            else{
                echo '<script>alert("Select a trainer first");</script>';
            }
        }
    }
?>
        
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

