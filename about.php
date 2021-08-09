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
<style>
.img-circular{
 width: 200px;
 height: 200px;

 background-size: cover;
 display: block;
 border-radius: 100px;
 -webkit-border-radius: 100px;
 -moz-border-radius: 100px;
}
</style>



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
<section class="section-lg bg-secondary" style="background-image:url(&quot;images/about.jpg&quot;); background-repeat: no-repeat; background-size: cover;">
        <div class="container wide">
          <div class="text-center">
            <h1>About Us</h1>
            
          </div>
        </div>
</section>
   <div class="section section section-lg">
        <div class="container wide">
           <div class="row row-md-30">
             
			      <div class="col-md-12 col-lg-12 subtitle-2 text-center">
			          <h3 class="title green">Our Mission</h3>
			          This year – 2021 – we are planning to launch a website which aims to provide services that will meet the demands of people, particularly the counselors, who wants to offer their services in a very efficient and convenient way; and the patients or people who needs help wherein they can reach out or contact the counselors at their own convenience; and provides accessibility to both patients and counselors.
            </div>
          </div>
        </div>
    </div>
	

  <div class="section section-lg bg-gray-150">      
			  <div class="row row-sm-30 container text-center">
			      <div class="col-sm-12 col-md-12 col-lg-12">
			      <h3 class="title green text-center">Our Success Stories</h3>
			      </div>
			    <div class="col-sm-12 col-md-4 col-lg-4">
			      <img src='images/c.jpg' class='img img-responsive img-circular' >
			      <p>Only half of Canadians experiencing a major depressive episode receive "potentially adequate care."</p>
			    </div>
			    <div class="col-sm-12 col-md-4 col-lg-4">
				    <img src='images/cc2.jpg' class='img img-responsive img-circular' >
				    <p>One-third of Canadians aged 15 or older who report having a need for mental health care say those needs were not fully met.</p>
			  
			    </div>
			    <div class="col-sm-12 col-md-4 col-lg-4">
				    <img src='images/cc3.jpg' class='img img-responsive img-circular' >
				    <p>75 per cent of children with mental disorders do not have access to specialized treatment services.</p>
			  
			    </div>
			  
	      </div>
  </div>
	<!--Testimonials-->
      <div class="section section-lg bg-gray-150">
        <div class="text-center">
          <h3 class="title green">Testimonials</h3>
        </div>
        <div class="owl-carousel owl-theme-1" data-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-xl-items="2" data-xxl-items="3" data-margin="15px" data-nav="false" data-dots="true" data-autoplay="8000">
          <div class="testimonial-box">
            <div class="testimonial-title">Cool!</div>
            <div class="testimonial-rate"><img src="images/rate-2-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">“I have found all your services to be amazing. Most recently I had a very encouraging talk with Janet. She is a miracle worker. Janet somehow manages make my anxiety like I have never had any moments of stress in life.”</div>
            <div class="testimonial-name">— Alisa R.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Excellent!</div>
            <div class="testimonial-rate"><img src="images/rate-1-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">“Your therapists are beyond incredible. They are so kind-hearted and treat you like the individual that you are. They listen and take note of what matters to you.”</div>
            <div class="testimonial-name">— John C.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Amazing!</div>
            <div class="testimonial-rate"><img src="images/rate-1-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">"Your therapists are amazing at listening. They take time and listen to you eagerly before the they say something that you truly understand problem! They really aim to provide a high level of service."</div>
            <div class="testimonial-name">— Evan M.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Excellent!</div>
            <div class="testimonial-rate"><img src="images/rate-2-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text"> “I am pleased with the provided service and will continue my sessions with you. Also, I would recommend YesToWellness to anybody who has anxiety, depression and other disorders or hurt issues.”</div>
            <div class="testimonial-name"> — Edward J.</div>
          </div>
        </div>
      </div>
	  
	  
			   <div class="row row-sm-30 container text-center">
			      <div class="col-sm-12 col-md-12 col-lg-12">
			  <h3 class="title green ">Our Team</h3>
			  <br>
			   </div>
			   <div class="col-sm-12 col-md-4 col-lg-4">
         <!-- <div class="main-bunner-img bg-overlay-1" style="background-image: url(&quot;images/slide-01.jpg&quot;); background-size: cover;"></div> -->
			   <img src="images/a3.jpg" class="img img-responsive" height="250px">
			   <b>Maria Sharmin Agbay</b>
			   </div>
			   
			    <div class="col-sm-12 col-md-4 col-lg-4">
				 <img src='images/a1.jpg'class='img img-responsive'height='250px'>
				  <b>Foramben Patel</b>
          
			   </div>
			  
			   <div class="col-sm-12 col-md-4 col-lg-4">
			   <img src='images/a2.jpg' class='img img-responsive' height='250px'>
				  <b>Chinchu Chettayil Joseph</b>
			  
			   </div>
			 </div>
	  
	
	    <?php
	  include('footer.php')
	?>
     

    <!--coded by dyoma-->
  </body>
</html>