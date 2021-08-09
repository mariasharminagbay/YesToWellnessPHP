<?php 

if (session_id() == "") 
    session_start(); 

    include("connect.php");
   
    $error="";
    
    $customerID = $_SESSION['customerID'];
    //echo $customerID;
    $customerType = $_SESSION['customerType'];

    //will update the appoint request list
    if (isset($_GET['decline'])){
      /* echo '<script>alert("at post decline")</script>'; */
      $appointmentRequestID = $_GET['decline'];

      $result = mysqli_query($con, "UPDATE tblappointmentrequests SET sessionStatusId = 4 
                    WHERE appointmentRequestID = $appointmentRequestID");

    }

    if (isset($_GET['approve'])){
      /* echo '<script>alert("at post select")</script>'; */
      $appointmentRequestID = $_GET['approve'];

      $result = mysqli_query($con, "UPDATE tblappointmentrequests SET sessionStatusId = 2 
                    WHERE appointmentRequestID = $appointmentRequestID");
  
    }

    if (isset($_GET['cancel'])){
      /* echo '<script>alert("at post select")</script>'; */
      $appointmentRequestID = $_GET['cancel'];

      $result = mysqli_query($con, "UPDATE tblappointmentrequests SET sessionStatusId = 3
                    WHERE appointmentRequestID = $appointmentRequestID");
 
    }

    if (isset($_GET['view'])){
      echo '<script>alert("at post decline")</script>';
      $appointmentRequestID = $_GET['view'];

      $_SESSION['appointmentRequestID'] = $appointmentRequestID;
      header('location: viewDetailsOfAppointment.php');
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
      <?php 
          $query_pendingAppointment = mysqli_query($con, "SELECT a.appointmentRequestID as appointmentRequestID, a.practionerProfileId as practionerProfileId, a.patientBackgroundId as patientBackgroundId, 
          a.scheduleDate as scheduleDate, a.scheduleTime as scheduleTime, c.firstName as firstName, c.lastName as lastName
        FROM tblappointmentrequests a
        INNER JOIN tblpatientbackground B on a.patientBackgroundId = b.patientBackgroundId
        INNER JOIN tblcustomers c on b.customerID = c.customerId 
        where b.customerID = $customerID and a.sessionStatusId = 2");
      ?>
    <section class="fillform" style='background-color:#DEE6F3'>
      <div class="container">
        <div class="form-group row align-items-center">
            <div class="row">
              <div class="col-md-16">
                  <br>
                <div class="section-heading">
                    <h2>List of Scheduled Appointments</h2>
                </div>
                <div class="default-table">
                    <table>
                    <thead>
                        <tr>
                        <th style="display:none;">AppointRequesID</th>
                        <th>Date </th>
                        <th>Time </th>
                        <th>Counselor's Name</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <?php while($row = $query_pendingAppointment->fetch_assoc()){ ?> 
                        
                        <tr>
                          <td style="display:none;"><?php echo $row['appointmentRequestID']; ?></td>
                          <td> <?php echo $row['scheduleDate']; ?> </td>
                          <td> <?php echo $row['scheduleTime']; ?> </td>
                          <td> <?php echo $row['firstName']; ?> </td>
                          <td> <?php echo $row['lastName']; ?> </td>
                          <td>
                          <a href="patientAppointmentList.php?view=<?php echo $row['appointmentRequestID']; ?>"
                              class="btn btn-info"> View Details </a>
                            <a href="patientAppointmentList.php?cancel=<?php echo $row['appointmentRequestID']; ?>"
                              class="btn btn-info"> Cancel Appointment </a>
                          </td> 
                        </tr>
                      <?php } ?>
                    </tbody>
                    </table>
               
                </div>
                     
              </div>
            </div>
        </div>                     
    </section>

    <?php 
          $query_pendingApproval = mysqli_query($con, "SELECT a.appointmentRequestID as appointmentRequestID, a.practionerProfileId as practionerProfileId, a.patientBackgroundId as patientBackgroundId, 
          a.scheduleDate as scheduleDate, a.scheduleTime as scheduleTime, c.firstName as firstName, c.lastName as lastName
        FROM tblappointmentrequests a
        INNER JOIN tblpatientbackground B on a.patientBackgroundId = b.patientBackgroundId
        INNER JOIN tblcustomers c on b.customerID = c.customerId 
        where b.customerID =  $customerID and a.sessionStatusId = 1
        and a.isPatientRequest =0");
      ?>
    <section class="fillform" style='background-color:#DEE6F3'>
        <div class="container">
          <div class="form-group row align-items-center">
            <div class="row">
              <div class="col-md-16">
                  <br>
                <div class="section-heading">
                    <h2>List of Pending Requests</h2>
                </div>
                <form id="patientAppointmentList" action="patientAppointmentList.php" method="POST" >
                <div class="default-table">
                    <table>
                    <thead>
                        <tr>
                        <th style="display:none;">AppointRequesID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Counselor's Name</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php while($row = $query_pendingApproval->fetch_assoc()){ ?> 
                        
                          <tr>
                          <td style="display:none;"><?php echo $row['appointmentRequestID']; ?></td>
                          <td> <?php echo $row['scheduleDate']; ?> </td>
                          <td> <?php echo $row['scheduleTime']; ?> </td>
                          <td> <?php echo $row['firstName']; ?> </td>
                          <td> <?php echo $row['lastName']; ?> </td>
                          <td>
                          <a href="patientAppointmentList.php?approve=<?php echo $row['appointmentRequestID']; ?>"
                              class="btn btn-info"> Approve </a>
                          </td>  
                          <td>
                          <a href="patientAppointmentList.php?decline=<?php echo $row['appointmentRequestID']; ?>"
                              class="btn btn-info"> Decline </a> </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    </table> 
                </div>
              </form>      
              </div>
            </div>
        </div>   
        <div class="col-md-6 col-sm-16">
          <p><br></p>
          <div class="col-md-10">
            <div class="filled-rounded-button">
              <a href="patientBookingPage.php">Request for Appointment</a>
            </div>
          </div>
        </div>
        </div>
        <div>

                     
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