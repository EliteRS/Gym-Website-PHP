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
                        <li><a href="./appointment2.php">Appointment</a></li>
                        <li><a href="./contact2.php">Contacts</a></li>
                        <li class="active"><a href="./profile.php"><?php echo $_SESSION['Login']; ?></a></li>
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
                        <br><h2>Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

<!---PROFILE--->
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
                        else if ($row['gender']=='F')
                            echo "<h3>Gender: Female</h3><br>";
                        
                        echo "<h3>Weight: ".$row['weight']." kg</h3> <br>
                        <h3>Height: ".$row['height']." cm</h3> <br>
                        <h3>BMI: ".$row['bmi']."</h3>";
                        ?>

                        <tr style="height:100px">
                        <td colspan="2" style="margin:3rem 0;text-align:center;vertical-align:middle"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editProfileModal" style="margin-top: 20px; margin-bottom: 20px;">Update Profile</button></td>
                        </tr>

                        <form method="post">
                            <button type="submit" class="btn btn-dark" name="deleteProfile" onclick="myFunction()">Delete Profile</button>
                            <?php 
                                $con = mysqli_connect("localhost","root","","fitnessgymdb");
                                $uname = $_SESSION['Login'];
                                if(isset($_POST['deleteProfile'])){
                                    $query = "DELETE from customer where username = '$uname'";
                                    $result = mysqli_query($con,$query);
                                    echo '<script>alert("Delete Successful!");</script>';
                                    echo "<script language='javascript'> window.location.href='index.php';</script>";
                                    
                                }
                            ?>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!---PROFILE ENDS--->

    <!---UPDATE PROFILE--->
 <?php
    if(isset($_POST['updateProfile'])){

        $uname=$_SESSION['Login'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $bday=$_POST['bday'];
        $gender=$_POST['gender'];
        $weight=$_POST['weight'];
        $height=$_POST['height'];

        $convertHeight = $height/100;
        $sqr_height = $convertHeight * $convertHeight;
        $bmi = $weight / $sqr_height;
        $final_bmi = round($bmi, 2);

        $qUP="UPDATE `customer` SET  customer.`fname`='$fname',customer.`lname`='$lname',customer.`birthdate`='$bday',customer.`gender`='$gender',customer.`weight`='$weight',customer.`height`='$height', customer.bmi='$final_bmi' WHERE customer.`username`='$uname'";
        $rUP=mysqli_query($con,$qUP);
        if($rUP){
            echo '<script>alert("Update Success!");</script>';
            echo "<script language='javascript'> window.location.href='profile.php';</script>";
        }else{
            echo '<script>alert("'.mysqli_error($con).'");</script>';
            echo '<script>alert("'.$uname.'");</script>';
        }
    }
?>
<!--UPDATE ENDS--->

<!-- DELETE PROFILE -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editModal"  style="text-align:center" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="margin: 0 auto;padding:0;">
        <div class="title" style="padding-bottom:0;text-align:center">
            <h2>Almost Done!</h2>
            <h5>You just need to fill up this information!</h5>
        </div>
      </div>
    <form method="post">
       
      <div class="modal-body" style="margin: 0 auto;border:none;">
        <div class="form-group" >
          <input type="text" class="form-control" id="contact" name="fname" aria-describedby="Username" placeholder="Firstname" value="<?php echo $row['fname'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control" id="exampleInputEmail1" name="lname" aria-describedby="Username" placeholder="Lastname" value="<?php echo $row['lname'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="date" class="form-control"  id="exampleInputEmail1" name="bday" aria-describedby="Username" placeholder="Birthdate" value="<?php echo $row['birthdate'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control"  id="exampleInputEmail1" name="gender" aria-describedby="Username" placeholder="Gender" value="<?php echo $row['gender'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control"  id="exampleInputEmail1" name="weight" aria-describedby="Username" placeholder="Weight" value="<?php echo $row['weight'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control"  id="exampleInputEmail1" name="height" aria-describedby="Username" placeholder="Height" value="<?php echo $row['height'];?>" style="border:2px #212020 solid;" required>
        </div>

      </div>
      <div class="modal-footer" style="margin: 0 auto;border:none;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" name="updateProfile">Confirm</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!---DELETE PROFILE ENDS-->

<!-- MY APPOINMENT TABLE -->
<section class="trainer-schedule set-bg spad" data-setbg="img/trainer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>My Appointments</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">

                <?php
                    $con = mysqli_connect("localhost","root","","fitnessgymdb");
                    $uname = $_SESSION['Login'];
                    if(isset($_POST['delApp'])){
                        $apno=$_POST['delApp'];
                        $query="DELETE FROM appointment WHERE appointment_no =$apno";
                        if(mysqli_query($con,$query)){
                            echo'<script>alert("DELETE SUCCESS")</script>';
                        }else{
                            echo'<script>alert("'.mysqli_error($con).'")</script>';
                        }
                    }
                    echo "<table>
                    <thead>
                    <tr>
                    <th scope='col'>Trainer</th>
                    <th scope='col'>Appointment Date</th>
                    <th scope='col'>Appointment Time</th>
                    <th scope='col'>Training Program</th>
                    <th scope='col'>Diet Routine</th>
                    <th scope='col'>Trainer Specialty</th>
                    <th></th>
                    </tr>
                    </thead>";
                    
                    if($con){
                        $query = "SELECT appointment_no,fitnesstrainer.trainer_fname, fitnesstrainer.trainer_lname, dateOfAppointment,timeOfAppointment, programName, 
                        dietRoutine, specialty FROM `appointment`,fitnesstrainer, fitnessprogram,trainerspecialty WHERE `username` = '$uname' AND 
                        fitnesstrainer.trainerID = appointment.trainerID AND fitnesstrainer.trainerID = fitnessprogram.trainerID AND trainerspecialty.trainerID = 
                        fitnesstrainer.trainerID";
                        $result = mysqli_query($con,$query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                                <td>".$row['trainer_fname']." ".$row['trainer_lname']."</td>
                                <td>".$row['dateOfAppointment']."</td>
                                <td>".$row['timeOfAppointment']."</td>
                                <td>".$row['programName']."</td>
                                <td>".$row['dietRoutine']."</td>
                                <td>".$row['specialty']."</td>
                                <td><button type='button' class='btn btn-danger' onclick='setDelete(".$row['appointment_no'].")'>Delete</button>
                                </td>
                            </tr>";
                        }  
                    }
                    echo "</table>";
                ?>

            <form method="post"> 
                    <button type="submit" name="delApp" id="delApp" style="display:none"></button>
            </form>

            <script>
            function setDelete(id){
                if(confirm("Are you sure you want to delete?")){
                    document.getElementById('delApp').value=id;
                    document.getElementById('delApp').click();
                }
            }
            </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MY APPOINMENT TABLE -->


<!--footer--->
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