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
            <h1>Contacts</h1>
            
          </div>
        </div>
      </section>
      <!--Mailform-->
      <section class="section section-xl">
        <div class="container wide">
		<div class="subtitle-2">Do you have a question,concern,idea,feedback,or problem? take a look at our frequently asked questions for somequick answers.if you still need assistance ,please fill out the form below and we'd be hapy to help!</div>
          <div class="row row-50">
           
            <div class="col-lg-8">
             
   
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-12 col-xl-5">
            
              <!--RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="" novalidate="novalidate">
                <div class="row row-20">
                  <div class="col-md-12">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-name">First Name</label>
                    </div>
                  </div>
				   <div class="col-md-12">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-name">Last Name</label>
                    </div>
                  </div>
				   <div class="col-md-12">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label rd-input-label" for="contact-message">Your Message</label>
                      <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                    </div>
                  </div>
                 
                 
                </div>
           
            </div>
          </div>
   
    
            </div>
			
			 <div class="col-lg-4">
              <div class="contacts-wrap" style='background-color:#ccc;padding:10px'>
                <p>YesToWellness</p>
               
                <p>Location</p><span>8585 Wellness Street,<br>Thunder Bay ,ON 5Y5 3W3</span>
				<br>
				<br>
				<p class='green'>contact@yestowellness.com<p>
              </div>
			  	 <div class="col-md-6">
				 <br>
                    <button class="button button-block button-danger" style='background-color:#b31111;color:#ffffff' type="submit">Send Message</button>
                  </div>
				     </form>
            </div>
			
		
          </div>
        </div>
      </section>
	    <?php
	  include('footer.php')
	?>
     

    <!--coded by dyoma-->
  </body>
</html>