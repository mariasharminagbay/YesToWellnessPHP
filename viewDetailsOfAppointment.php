<?php 

if (session_id() == "") 
    session_start(); 

    include("connect.php");
    $nameofCOunselor="";
    $locationCounselor="";
    $licenseType="";

    $error="";
    
    $customerID = $_SESSION['customerID'];
    //echo $customerID;
    $customerType = $_SESSION['customerType'];
    $patientBackgroundId = $_SESSION['patientBackgroundId'];
    
    $appointmentRequestID = $_SESSION['appointmentRequestID'] ;
      
      $result = mysqli_query($con, "SELECT a.appointmentRequestID as appointmentRequestID, a.insurancePolicyNumber AS insurancePolicyNumber,
                    a.scheduleDate as scheduleDate, a.scheduleTime as scheduleTime, a.notes as notes, 
                    b.city as city, b.licenseType as licenseType, c.firstName as firstName, c.lastName as lastName
                    FROM tblappointmentrequests a
                    INNER JOIN tblpractitionerProfile B on a.practionerProfileId = b.practionerProfileId
                    INNER JOIN tblcustomers c on b.customerID = c.customerId 
                    where a.appointmentRequestID = $appointmentRequestID ");

      $numpresult = mysqli_num_rows ($result);

      if($numpresult > 0) {
        $row = $result->fetch_array();
        $nameofCOunselor= $row['firstName']." ".$row['lastName'];
        $locationCounselor=$row['city'];
        $licenseType=$row['licenseType'];
        $notes = $row['notes'];
        $scheduleDate = $row['scheduleDate'];
        $scheduleTime = $row['scheduleTime'];
        $insurancePolicyNumber = $row['insurancePolicyNumber'];

      }  

?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/YTWlogo.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css"> 
    <link href="assets/js/bootstrap.min.css" rel="stylesheet">

     
</head>
  <body>
    <?php echo $error; ?>
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
                      
                      <?php 

                        if (session_id() == "") { ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a>
                          </li>
                      <?php } ?> 
                      <?php if (session_id() != "") { ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Logout</a>
                          </li>
                      <?php } ?> 
                      <li class="rd-nav-item"><a class="rd-nav-link">Hello   <strong style="color:green;font-size:30px;"> <?php echo $_SESSION['user_name']; ?> </strong> </a>
                   
                    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main bunner-->

    <section class="fillform" style='background-color:#DEE6F3'>
      <div class='container' style='margin-left:50px;margin-right:50px;'>
        <div class='col-md-12' style='padding-left:100px;padding-right:100px;'> 
              <br>  <br>			 
            <h4 data-caption-animate="fadeInUp" data-caption-delay="100">Details of the Appointment</h4>
            <br>
         <form id="viewDetailsOfAppointment" action="viewDetailsOfAppointment.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row align-items-center">
                    <div class="form-group col-md-6">
                        <label for="date"> Date: </label>
                        <input type="text" name="date" class="form-control" 
                        value="<?php echo $scheduleDate; ?> " disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Time:</label>
                        <input name="time" id="time" type="text"  class="form-control" 
                        value="<?php echo $scheduleTime; ?> " disabled>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <div class="form-group col-md-6">
                        <label for="insuranceCompName">Insurance Company Name: </label>
                        <input type="text" name="insuranceCompName" id="insuranceCompName" class="form-control" value="Canada Insurance Company" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insuranceNumber">Insurance Policy Number: </label>
                        <input name="insuranceNumber" id="insuranceNumber" type="text"  class="form-control" 
                        value="<?php echo $insurancePolicyNumber; ?> " placeholder=" " disabled>
                    </div>
                </div>
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-4">
                            <label for="nameCounselor">Name of Counselor</label>
                            <input name="nameCounselor" id="nameCounselor" type="text" class="form-control"
                            value="<?php echo $nameofCOunselor; ?> " placeholder=" " disabled>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="locationCounselor">Location of Counselor</label>
                                <input name="locationCounselor" id="inpulocationCounselortState" type="text" class="form-control"
                                  value="<?php echo $locationCounselor; ?> " placeholder=" " disabled>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="licenseTypeCounselor">License Type of Counselor</label>
                            <input name="licenseTypeCounselor" id="licenseTypeCounselor" type="text" class="form-control"
                              value="<?php echo $licenseType ; ?> " placeholder=" " disabled>
                            </div>
				
                <div class="form-group col-md-12">
                    <label for="notes">Notes:</label>
                    <fieldset>
                        <textarea class="form-control" id="notes" name="notes" rows="6" 
                        disabled><?php echo htmlspecialchars($notes, ENT_QUOTES, 'UTF-8') ?></textarea>
                    </fieldset>
                </div>
                <div>
                    <a class="button button-primary button-md button-round-2" href="patientAppointmentList.php" data-caption-animate="fadeInUp" data-caption-delay="450">Back to Appointment List</a>       
                </div>
             </div>
                 
             </div>
             
            </form>
      </div>
     </div>                
    </section>

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