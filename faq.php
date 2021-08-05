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
     <?php
	  include('header.php')
	?>
      <section class="section-lg bg-secondary">
        <div class="container wide">
          <div class="text-center">
            <h1>FAQ</h1>
           
          </div>
        </div>
      </section>
   <div class="section">
        <div class="container wide">
          <div class="row row-md-80 row-sm-50">
            <div class="col-sm-12 col-lg-12">
              <div class="subtitle">Frequently Asked Questions</div>
            </div>
            <div class="col-sm-12  offset-lg-2 col-lg-10">
              <div class="card-group-custom" id="accordion1" role="tablist" aria-multiselectable="false">
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-alasxtaj" data-toggle="collapse"
					data-parent="#accordion1" href="#accordion1-card-body-xlhnxvuc"
					aria-controls="accordion1-card-body-xlhnxvuc" aria-expanded="false"
					role="button">What is YesToWellnes?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-xlhnxvuc" aria-labelledby="accordion1-card-head-alasxtaj" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Primary reasons for implementing this wellness platform are to provide help and reduce, if not eliminate, depressions which leads to other illnesses or suicide. Managing health care costs remains the top concern and objective not only in Canada but also worldwide.</p> </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-qtsmcpyn" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-yhmsmbvt" aria-controls="accordion1-card-body-yhmsmbvt" aria-expanded="false" role="button">
					Who will be helping me?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-yhmsmbvt" aria-labelledby="accordion1-card-head-qtsmcpyn" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>.“Telemedicine” (telephonic physician support services) and “Onlimedicine” (chatting online for support services) is now what the world needs most especially during this pandemic; and it is the fastest growing wellness program not only in Canada but also other countries who also followed and believe in wellness.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-shlfwmgn" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-cqwdacur" aria-controls="accordion1-card-body-cqwdacur" aria-expanded="false" role="button">
					Who are the Counselors?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-cqwdacur" aria-labelledby="accordion1-card-head-shlfwmgn" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>The trend toward globalizing wellness initiative continues. Many sectors are participating to have a global health promotion strategy. There may be challenges due to cultural differences, laws and practices but still will go back to the advocacy and goal which is to connect and help each other.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-axgjvlha" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-axwynooc" aria-controls="accordion1-card-body-axwynooc" aria-expanded="false" role="button">
					How are the Counselors verified?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-axwynooc" aria-labelledby="accordion1-card-head-axgjvlha" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Increasingly, companies, non-government agencies and government agencies see the value in making spouses, domestic partners and children eligible for health awareness, promotion and wellness programs.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-eqiypqcb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-xxrtkqtu" aria-controls="accordion1-card-body-xxrtkqtu" aria-expanded="false" role="button">
					Who will communicate with my Counselor?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-xxrtkqtu" aria-labelledby="accordion1-card-head-eqiypqcb" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>The target of a “society of health” continues to be strong and extending the reach to help those in need to have a healthy wellbeing. Individuals and companies nowadays are very much aware of how this pandemic brings challenges to all people in all walks of life.</p>
                    </div>
                  </div>
                </article>
				<!--Bootstrap card-->
               
              </div>
            </div>
          </div>
        </div>
      </div>
	    <?php
	  include('footer.php')
	?>
     

    <!--coded by dyoma-->
  </body>
</html>