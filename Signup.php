<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BrainOne</title>
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.css">
	 <link rel="shortcut icon" href="..\..\wp-content\themes\mdbootstrap4\favicon.ico">
    <link href="res/css/bootstrap.css" rel="stylesheet">
    <link href="res/css/style.css" type="text/css" rel="stylesheet">
    <link href="res/css/mdb.css" rel="stylesheet">
    <link href="res/css/compiled.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/cater.css">
    <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
    
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <style>
      
			
        }
        .view {
            margin-top: -56px;
        }
        .navbar {
            z-index: 1;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 700px; 
            } 
        }
		 
		 
    </style>
</head>
    <body class="main">
		<div class="Logo " style="height:90px; text-align:left">
		<a href = "Index.html" ><img class="hoverable responsive-img" src="images/brain.png" style="width:160px; float:left; margin-left:50px"></a> 
			Brain One 	
			&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;
			 <span style="float:center">Restoring the Ethusiasm of Reading</span>
		</div>
		
		<!--Nav Bar-->
        <nav class="nav-bar-1">
            <div class="nav-wrapper" style="font-size:30px">
				
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="left hide-on-med-and-down" style="margin-left:100px;  ">
					<li><a href="Index.html.html" >Home</a></li>
					<li><a href="collapsible.html">Articles</a></li>
					<li><a href="mobile.html">Books</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="Contact.html">Contact Us</a></li>
					<li><a href=""></a></li> 
				</ul>
				<ul class="right hide-on-med-and-down"  >
					<li><a href="Signup.html">Sign Up</a></li>
					<li><a href="Login.html">Login</a></li> 
				</ul>
                <form   class="right hide-on-med-and-down" Style="width:15%">
					<input type="text" placeholder="Search" aria-label="Search">
				</form>
            </div>
			
        </nav>
        <!-- End of Nav-Bar -->
		 
		<br>
		<div class="container" style="background-color:#f3e5f5">
            <!--Register form-->
            <?php 
			
            
try {   
    require_once('db_signer.php');  

 if ($_SERVER['REQUEST_METHOD'] == "POST"){
   
                        
    $Fname = $_POST['Fname'];      
    $Lname = $_POST['Lname'];
    $email=  $_POST['email'];
    $pass = $_POST['pass'];
    $Cpass = $_POST['Cpass'];


    // function tSanit() {

    //     $info = trim();
    // }

       
                        if (isset($_POST['sign'])) {

                        foreach ($_POST as $key => $value) {
                         if (empty($_POST[$key])){
                        $emsg =  "all fields are required sir";
                       break;  
                        } 

                    }
                    if (!isset($emsg)) {        // validatng passwords
                if (strlen($pass) < 6 || strlen($Cpass) < 6)  {
                        $emsg = "password length should be atleast 6 characters";
                }
            }      
            if (!isset($emsg)) {
                if ($pass != $Cpass ) {
                        $emsg= "passwords don't match";
                    }
                }
            
               
                        // validating email address
                        if (!isset($emsg)){
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){    
                                $emsg = "invalid email Address";
                           } 

                        }

                      
                        if (!isset($emsg)) {
                        $sql = "SELECT email FROM signer WHERE email = ? ";
                            $stmt= $coneh->prepare($sql);
                            $stmt->execute([$email]);
                                $e = $stmt->fetch(PDO::FETCH_ASSOC);
                            if ($stmt->rowCount() > 0) {
                                $emsg = "it seems liek you already have any account with us?";
                            }
                               
                        }
                          

                           
                            
                   
                }
                $hash = password_hash($pass, PASSWORD_BCRYPT);
                
                        if (!isset($emsg)) {

                            $sql = " INSERT INTO signer(Fname, Lname, email, pass) VALUES (:Fname, :Lname, :email, :pass)";

                            $stmt= $coneh->prepare($sql);

                            $stmt->execute(['Fname'=>$Fname, 'email'=>$email, 'pass'=>$hash, 'Lname'=>$Lname]);
                                
                            $_SESSION['userKey'] = $_POST['email'];
                            header("location: dashboard.php");
                        }
                } 

}

catch (PDOException $e){
	
	echo "this the key" . $e->getMessage();
}
            ?>


     
    
			<form  action="signup.php"  method="POST"> 
			 <?php
			 
if (isset($emsg)){

    echo '<label class="text-danger">'.$emsg.' </label>';
} 
?>
				<p class="h3 text-center mb-4"><b>Sign up</b></p>
				<!--Card content-->
				<div class="card-body " style="width:80%">
					<div class="md-form">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="orangeForm-name" name="Fname" class="form-control" >
						<label for="orangeForm-name">First name</label>
					</div>

                    <div class="md-form">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="orangeForm-name" name="Lname" class="form-control" >
						<label for="orangeForm-name">Last Name</label>
					</div>


					<div class="md-form">
						<i class="fa fa-envelope prefix grey-text"></i>
						<input type="text" id="orangeForm-email" name="email" class="form-control" >
						<label for="orangeForm-email">Your email</label>
					</div>

					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="orangeForm-pass" name="pass" class="form-control" >
						<label for="orangeForm-pass">Your password</label>
					</div>
					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="orangeForm-pass" name="Cpass" class="form-control">
						<label for="orangeForm-pass">Confirm Your password</label>
					</div>

					<div class="text-center">
						<button class="btn btn-deep-orange waves-light" type="submit" name="sign" value="signer" > Sign up</button>
					</div>
					
					<div class="text-center">
					<!--Linkedin-->
					<a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a>
					<!--Twitter-->
					<a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
					<!--Dribbble-->
					<a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
					<a class="icons-sm email-ic"><i class="fa fa-envelope"> </i></a>
					<a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
        
				
			</form>
			<!--/Register form-->
        
		</div>  
						 
       <footer class="page-footer  	default-color center-on-small-only">
            <div class="container">
                <div class="row">
					<div class="col 16 s12 m6">
					  <h5 class="white-text">Brain One </h5>
					  <p class="white-text text-lighten-4">Our Philosophy is to achieve excellence through constant practice and refinement as we grow to meet the needs of the contemporary culinary and hospitality hubby.</p>
					</div>
                    <div class="col 6 s6 m2">
                  <a href="Index.html"><h5 class="white-text">Home</h5></a> 
				  <a href="#"><h6 class="white-text">Article</h6></a>
				  <a href="#"><h6 class="white-text">About Us</h6></a> 
				  <a href="Contact.html"><h6 class="white-text">Contact Us</h6></a>
                </div>
				<div class="col 5 s6 m2">
                  <h5 class="white-text">Address</h5>
                  <ul>
                    <li>MOUAU</li>
                    <li>Umuahia</li>
                    <li>Abia State</li>
                    <li>PO Box 7265</li>
                  </ul>
                </div>
                 </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: <a href="https://www.Brainone.com"> BrainOne.com </a>

                </div>
            </div>
        </footer>
         <script type="text/javascript" src="res/js/jquery.js"></script>
                <script type="text/javascript" src="res/js/compiled.js"></script>
                <script type="text/javascript" src="res/js/jarallax.js"></script>
                <script type="text/javascript" src="res/js/jarallax-video.js"></script>
                <script type="text/javascript" src="res/js/popper.min.js"></script>
                <script type="text/javascript" src="res/js/mdb.min.js"></script>
                <script type="text/javascript" src="res/js/bootstrap.min.js"></script>
                <script>
                    $('body').scrollspy({
                        target: '.dotted-scrollspy'
                    });
                    $(function () {
                        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
                    });

                    $('.navbar-collapse a').click(function(){
                        $(".navbar-collapse").collapse('hide');
                    });
                    new WOW().init();
            </script>
    </body>
</html>