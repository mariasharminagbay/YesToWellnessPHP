<?php

session_start();

include("connect.php");
include("functions.php");

//session_start();
$error="";

if (isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  //$password =md5($password);
  
  if (email_exists($email,$con))
  {
    //echo("email exists");
    $result = mysqli_query($con, "select customerId, password, firstname, customerTypeId from tblcustomers where emailAddress ='$email'");
    $retrievepassword = mysqli_fetch_assoc($result);
    $user_pass = $retrievepassword['password'];
    $user_name = $retrievepassword['firstname'];
    $userid = $retrievepassword['customerId'];
    //echo('Password from DB is '.$user_pass);
    $customerType = $retrievepassword['customerTypeId'];

    if(password_verify($password,$user_pass))   //$retrievepassword['password']))
    {
      $_SESSION['email'] = $email;
      $_SESSION['user_name'] = $user_name;
      $_SESSION['customerType']=$customerType;
      $_SESSION['customerID']=$userid;

      //will get the profileID first:
      if($customerType==1){
        $getpatientBackgroundId = mysqli_query($con, "SELECT `patientBackgroundId` FROM `tblpatientbackground`  WHERE `customerId`=$userid");
        $retrievepatientBackgroundId = mysqli_fetch_assoc($getpatientBackgroundId);

        $_SESSION['patientBackgroundId']=$retrievepatientBackgroundId['patientBackgroundId'];
     
      } else{
        $getpractitionerProfileId = mysqli_query($con, "SELECT `practionerProfileId` FROM `tblpractitionerprofile`  WHERE `customerId`=$userid");
        $retrievepractitionerProfileId = mysqli_fetch_assoc($getpractitionerProfileId);

        $_SESSION['patientBackgroundId']=$retrievepractitionerProfileId['practionerProfileId'];
        
      }
      echo $_SESSION['email'];
      header("location: index.php");
    }else 
      {
        echo '<script>alert("Sorry, Your password is incorrect")</script>';

      }	
	}else
	  {
        $error="Your email does not exists";
    }
  }
  

 ?>




<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="images/YTWlogo.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/YTWlogo.png" alt="" width="214" height="56"/><img class="brand-logo-light" src="images/logo-inverse-430x112.png" alt="" width="215" height="56"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About</a>
                      </li>

                      <li class="rd-nav-item"><a class="rd-nav-link" href="faq.php">FAQ</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      
               
                    </ul>
                  </div>
                </div>
                <!-- <div class="rd-nav-item">
                  <div class="btn-wrap"><a class="button button-secondary button-sm" href="#">Get Started</a></div>
                </div> -->
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main bunner-->
      <div class="section section-main-bunner context-dark" id="home">
        <div class="main-bunner-img bg-overlay-1" style="background-image: url(&quot;images/mentalillness_hand3.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container wide">
            <div class="row justify-content-left">
                <form method="POST" action="login1.php" enctype="multipart/form-data">
                <h4 data-caption-animate="fadeInUp" data-caption-delay="100">To get started, please enter:</h4>
                      </br>
                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                    <br>
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <div>
                    <div class="forgot login-footer">
                            <span>Looking to
                                  <a href="register.php"><b>create an account</b></a>
                                 <!-- <a href="login_register_modal.php"> create and account</a> -->
                            ?</span>
                    </div>
                    </div>
                <p>
                    <input type="submit" name="submit" value="LOGIN" style="background-color: #4CAF50; border: none; padding: 16px 32px; margin: 4px 2px;" >
                  
                </p>

                </form>
            </div>
          </div>
        </div>
      </div>
      <!--Testimonials-->
     

       <footer class="section footer-classic context-dark">
        <div class="container wide">
          <div class="row row-sm-30">
            <div class="col-lg-6">
              <div class="phone-wrap">
                <div class="group-md group-middle"><a class="phone-link" href="tel:#">1 000 -234 -78-90</a>
                  <div class="phone-sub">Call Me Back</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-lg-right">
                <div class="group-xl group-middle">
                  <p>Any complaints or suggestions?</p><a class="button button-white button-round-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Let Us Know</a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-wrapper">
            <div class="row row-sm-30">
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>YesToWellness</p>
                <ul class="list">
                  <li><a href="#" data-waypoint-to="#">About Us</a></li>
                  <li><a href="#" data-waypoint-to="#">Reviews</a></li>               
                  <li><a href="#" data-waypoint-to="#">Affiliates</a></li>
                  
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>Help</p>
                <ul class="list">
                  <li><a href="#" data-waypoint-to="#">Help Center</a></li>
                  <li><a href="#" data-waypoint-to="#">FAQs</a></li>
                  <li><a href="#" data-waypoint-to="#">Pricing</a></li>
                  
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>    </p>
                <ul class="list">
                  </br>
                  <li><a href="#" data-waypoint-to="#"></a></li>
                  <li><a href="#" data-waypoint-to="#">Terms</a></li>
                  <li><a href="#" data-waypoint-to="#">Privacy Policy</a></li>
                  <li><a href="#" data-waypoint-to="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="row row-sm-30">
            <div class="col-lg-6">
              <div class="group-md group-middle">
                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>YesToWellness</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-lg-right">
                <ul class="group-xl group-middle">
                  <li><a class="icon icon-default icon-sm mdi mdi-rss" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-linkedin-box" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by dyoma-->
  </body>
</html>