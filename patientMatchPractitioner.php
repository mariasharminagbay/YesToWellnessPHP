<?php 

if (session_id() == "") 
    session_start(); 

    include("connect.php");

    $error="";
    
    $customerID = $_SESSION['customerID'];
    //echo $customerID;
    $customerType = $_SESSION['customerType'];
    $error="";
    echo '<script>alert("before")</script>';
        if (isset($_POST['submit'])){
            echo '<script>alert("POPUP")</script>';
        /* $searchword = $_POST['searchword'];
        $query_searchproduct = mysqli_query($con, "SELECT `productname`, `productDescription`, `productPrice`, `productImage` FROM `products` WHERE productname LIKE '%$searchword%'");
        }
        else{ */
         //   $query_searchproduct = mysqli_query($con, "SELECT `productname`, `productDescription`, `productPrice`, `productImage` FROM `products` WHERE productname LIKE '%$searchword%'");
        //$query_searchproduct = mysqli_query($con, "SELECT `PR.practionerProfileId` as practionerProfileId, `PR.customerID` , `PR.officeLocation` , `PR.city` , `PR.province` , `PR.zip` , `PR.licenseType` , `PR.licenseNumber` , `PR.licenseCopy` , `PR.levelOfEducation` , `PR.nameOfInstitution` , `PR.profilePhoto` , `PR.affiliations` , `PR.specialties` , `PR.preferredPatientGender` FROM tblpractitionerprofile PR WHERE `PR.specialties`  LIKE (SELECT `PB.feelingToAddress` from tblpatientbackground PB where `PB.customerID` = 24)");
        $query_searchproduct = mysqli_query($con, "SELECT * from tblpractitionerprofile");
        //$numEmail=mysqli_num_rows($query_searchproduct);
       // $error= "After isset. Total rows returned: " +  $numEmail;
       //$numproductname = mysqli_num_rows ($query_searchproduct);
        //echo '<script>alert($numproductname)</script>';
        //$error= $numproductname;
        //echo '<script>alert(' + $numEmail+ ')</script>';
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
  <?php echo $error ?>
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

      <section class="fillform">
      <?php echo $error ?>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                  <br>
                <div class="section-heading">
                    <h2>List of Available Practitioner(s)</h2>
                </div>
                <form id="patientMatchPractitioner" action="patientMatchPractitioner.php" method="POST" >
                <input type="submit" id="submit" class="main-button" name="submit" value="Search Item" />
                <?php while($row = $query_searchproduct->fetch_array()){ ?>
                    <div class="col-md-4 col-sm-6">
                      <div class="blog-post">
                        <div class="blog-thumb">
                          <!--<img src="assets/images/product-1-720x480.jpg" alt=""> -->
                          <?php echo $row[5]; ?>
                        </div>
                        <div class="down-content">
                          <span>$ <?php echo $row[2]; ?> </span>
                          <h4> "<?php echo $row[0] ?>" </h4>
                          <p> <?php echo $row[1] ?></p>  
                        </div>
                      </div>
                    </div>
                <?php } ?>

                <div class="default-table">
                    <table>
                    <thead>
                        <tr>
                        <th>Product no.</th>
                        <th>Description</th>
                        <th>Price</th>
                        </tr>
                    </thead>
                        <tbody>
                       
                        
                        </tbody>
                    </table>

                
                </div>
               
                </form>        
              </div>
            </div>
        </div>   
        <div class="col-md-6 col-sm-12">
          <p><br></p>
          <div class="col-md-4">
            <div class="filled-rounded-button">
              <a href="patientBookingPage.php">Request for Appointment</a>
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