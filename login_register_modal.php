<?php

include("connect.php");

$error="";

if(isset($_POST['submit']))
{

    $agree=$_POST['agree'];
    //validate first if the customer agrees to the terms and condiditon - if not then it will not allow to register
    
$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordConfirm=$_POST['passwordConfirm'];

$query_emails=mysqli_query($con,"SELECT * FROM tblcustomers WHERE emailAddress='$email'");

$numEmail=mysqli_num_rows($query_emails);

    if (strlen($firstName) < 3)
    {
        //$error= "First name is too short. You must enter more than three characters";
        echo '<script>alert("First name is too short. You must enter more than three characters")</script>';
        //header("location: login_register_modal.php");
    }
    else if (strlen($lastName) < 3)
    {
        //$error="Last name is too short. You must enter more than three characters";
        echo '<script>alert("Last name is too short. You must enter more than three characters")</script>';
        //header("location: login_register_modal.php");
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        //$error="Please enter valid email address";
        echo '<script>alert("User is already exists")</script>';
        //header("location: login_register_modal.php");
    }

    else if ($numEmail > 0)
    {
        //$error="User is already exists";
        echo '<script>alert("User is already exists")</script>';
        //header("location: login_register_modal.php");
    }
    else if (strlen($password)<5)
    {
        //$error="Password must be greater than five characters";
        echo '<script>alert("Password must be greater than five characters")</script>';
        //header("location: login_register_modal.php");
    }
    else if ($password !== $passwordConfirm)
    {
        //$error="Password does not match!";
        echo '<script>alert("Password does not match!")</script>';
        //header("location: login_register_modal.php");
    }

    else if ($agree !=1) {
        echo '<script>alert("Sorry...You need to agree to terms and conditions to register.")</script>';
        //header("location: login_register_modal.php");
    } 

    else{
        $password=password_hash($password,PASSWORD_DEFAULT);
    //	$image=$email.$image;
        $insertQuery = "INSERT INTO tblcustomers (firstName,lastName,emailAddress,password)
            VALUES ('$firstName','$lastName','$email','$password')";

        if(mysqli_query($con,$insertQuery))
        {
            //"You are sucessfully registered";
            echo '<script>alert("You have sucessfully registered")</script>';
            $_SESSION['email']=$email;
            header("location: IsPatient.php");
        }	
        else
        {
            echo '<script>alert("Sorry...Try again!")</script>';
            //header("location: login_register_modal.php");
        }
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
                                    <form method="" action="" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
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
                                        <input id="agree" type="checkbox" name="agree" value="1" >
                                        <label for="agree"> I Agree to the Terms and Conditions</label><br> 
                                         
                                    </div>
                                    </br>
                                    <!-- <input class="btn btn-default btn-register" type="button" value="Create account" name="commit"> -->
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
                             <!-- <a href="javascript: showLoginForm();">Login</a> -->
                             <a href="login.php"> Login</a>
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
