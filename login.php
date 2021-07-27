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
    $result = mysqli_query($con, "select password, firstname from tblcustomers where emailAddress ='$email'");
    $retrievepassword = mysqli_fetch_assoc($result);
    $user_pass = $retrievepassword['password'];
    $user_name = $retrievepassword['firstname'];
    //echo('Password from DB is '.$user_pass);
	
    if(password_verify($password,$user_pass))   //$retrievepassword['password']))
    {
      $_SESSION['email'] = $email;
      $_SESSION['user_name'] = $user_name;
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



<!doctype html>
<html lang="en">
<head>
    <title>Login/Register</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/login-register.js" type="text/javascript"></script>

</head>
<body>
    <div class="image-container set-full-height" style="background-image: url('images/mentalillness_hand4.jpg')">
    <!--<div class="container"> -->

		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <!-- <form method="POST" action="login.php" accept-charset="UTF-8"> -->
                                    <form method="POST" html="{:multipart=>true}" data-remote="true" action="login.php" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <!-- <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()"> -->
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name="submit">
                                    
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="POST" html="{:multipart=>true}" data-remote="true" action="login_register_modal.php" accept-charset="UTF-8">
                                    <input id="firstname" class="form-control" type="text" placeholder="First Name" name="firstname">
                                    <input id="lastname" class="form-control" type="text" placeholder="Last Name" name="lastname">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input id="passwordConfirm" class="form-control" type="password" placeholder="Confirm Password" name="passwordConfirm">
                                    <div>
                                    
                                    </div>
                                    </br>
                                    
                                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="submit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                  <a href="javascript: showRegisterForm();">create an account</a>
                                 <!-- <a href="login_register_modal.php"> create and account</a> -->
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>


</body>
</html>
