
<?php 
include("connect.php");

if (session_id() == "") 
    session_start(); 

//echo "Email Address is: " .$_SESSION['email'];
//echo "Customer ID is: " .$_SESSION['customerId'];
//echo "Customer type is: " .$_SESSION['customerType'];

$email = $_SESSION['email'];
$customerID = $_SESSION['customerID'];
$customerType = $_SESSION['customerType'];

if (isset($_POST['submit'])){
    //will now save or update practitioner's page
    //if(!empty($_POST['specialties'])) {
      $officeLocation = $_POST['inputAddress'].', '.$_POST['inputAddress2'];
      //echo "$officeLocation";
      $city = $_POST['inputCity'];
      //echo "$city";
      $province = $_POST['inputState'];
      //echo "$state";
      $zip = $_POST['inputZip'];
      $specialties = $_POST['specialties'];  //implode(', ', $_POST['specialties']);
      $aboutme = $_POST['aboutme'];
      $leveleOfEducation = $_POST['leveleEducation'];
      $nameOfInstitution = $_POST['nameInstitution'];
      $affiliations = $_POST['affiliations'];
      $licenseNumber = $_POST['licensenumber'];
      $licenseCopy = $_POST['licensefile'];
      $profilePhoto = $_POST['profilePicture'];
    
      $insertQuery = "UPDATE tblpractitionerprofile
                SET officeLocation = '$officeLocation', city='$city', province = '$province', licenseNumber = '$licenseNumber', 
                licenseCopy = '$licenseCopy', levelOfEducation='$leveleOfEducation', nameOfInstitution='$nameOfInstitution',
                affiliations='$affiliations', specialties='$specialties', profilePhoto = '$profilePhoto', aboutMe='$aboutme',
                preferredPatientGender = '$preferredPatientGender'
                WHERE customerID = $customerID";
    echo "$insertQuery";
        
            if (mysqli_query($con,$insertQuery))
            {
                //beofre redericting to 
                header("location: index.php");
                echo '<script>alert("Item has been added")</script>';
            }
            else {
               
                
                echo '<script>alert("Error occured whitle adding item.")</script>';
            }

    //} else{
        //will ask the user to check one of the check boxes
    //    echo '<script>alert("Kindly choose license type.")</script>';
    //}
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
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main bunner-->

      <section class="fillform">
                      <br>
                      <h4 data-caption-animate="fadeInUp" data-caption-delay="100">Fill the form:</h4>
                      <br><br>
         <form id="practitionerProfile2" action="practitionerProfile2.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row align-items-center">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Address</label>
                        <input name="inputAddress" id="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Address 2</label>
                        <input name="inputAddress2" id="inputAddress2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                </div>
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-3">
                            <label for="inputCity">City</label>
                            <input name="inputCity" id="inputCity" type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                                <label for="inputState">State</label>
                                <input name="inputState" id="inputState" type="text" class="form-control" id="inputState">
                                <!-- <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select> -->
                        </div>
                            <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input name="inputZip" id="inputZip" type="text" class="form-control" id="inputZip">
                            </div>
                    </div>
                <div class="form-group col-md-4">
                    <fieldset>      
                        <legend>What are your other Specialties?</legend>      
                        <input type="radio" name="specialties" value="Stress"> Stress<br>      
                        <input type="radio" name="specialties" value="Anxiety"> Anxiety<br>      
                        <input type="radio" name="specialties" value="Depression"> Depression<br>  
                        <input type="radio" name="specialties" value="Relationship Issues"> Relationship Issues<br> 
                        <input type="radio" name="specialties" value="Addiction"> Addiction<br>   
                        <input type="radio" name="specialties" value="Religion Issues"> Religion Issues<br>     
                        <br>      
                            
                    </fieldset> 
                </div>
                <div class="form-group col-md-4">
                    <fieldset>      
                        <legend>Preferred gender of your therapist? (You can choose all.)</legend>      
                        <input type="radio" name="genders" value="Stress"> Male<br>      
                        <input type="radio" name="genders" value="Anxiety"> Female<br>      
                        <input type="radio" name="genders" value="Depression"> LGBTQ<br>   
                        <br>              
                    </fieldset> 
                </div>
                <div class="form-group col-md-4">
                    <label for="aboutme">About Me</label>
                    <fieldset>
                        <textarea class="form-control" id="aboutme" name="aboutme" rows="4" cols="50" placeholder="Tell us something about yourself..."></textarea>
                    </fieldset>
                </div>
                <br>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="100">Education:</h4>      
                    <br>    
                    <div class="form-group col-md-4">
                        <label for="leveleEducation">Level of Education</label>
                        <input name="leveleEducation" id="leveleEducation" type="text" class="form-control" id="leveleEducation" placeholder="Bachelor, Masters">
                    </div>    
                
                   <div class="form-group col-md-4">
                        <label for="nameInstitution">Name of Institution</label>
                        <input name="nameInstitution" id="nameInstitution" type="text" class="form-control" id="nameInstitution" placeholder="College, University">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="affiliations">Affiliations</label>
                        <input name="affiliations" id="affiliations" type="text" class="form-control" id="affiliations" placeholder="Affiliations">
                    </div>
                    
                        <div class="form-group col-md-3">
                            <label for="licensenumber">License Number</label>
                            <input name="licensenumber" id="licensenumber" type="text" class="form-control" id="licensenumber">
                        </div>
                            <div class="form-group col-md-3">
                                <label for="licensefile">Upload License</label>
                                <fieldset>
                                    <input type="file" name="licensefile" id="licensefile"/>
                                </fieldset>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="profilePicture">Upload Profile Picture</label>
                                <fieldset>
                                    <input type="file" name="profilePicture" id="profilePicture"/>
                                </fieldset>
                            </div>
                            
                            </div>
                   
                            <input type="submit" name="submit" value="Update Profile" style="background-color: #4CAF50; border: none; padding: 16px 32px; margin: 4px 2px;" >
                            
                      </br>
                <div>
                    <p><br><br></p>
                      <br>
                </div>
            </form>
            
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