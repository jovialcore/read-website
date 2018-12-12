<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BrainOne</title>
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.css">
	 <link rel="shortcut icon" href="..\..\wp-content\themes\mdbootstrap4\favicon.ico">
    <!-- <link href="res/css/bootstrap.css" rel="stylesheet"> -->
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
					<li><a href="Index.html" >Home</a></li>
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
		 
 
		<div class="container">
			
					<div class="col-lg-8 col-md-6 mb-r">

						<!--Card-->
						<div class="card card-cascade narrower">
							<!--Card content-->
							<div class="card-body text-left">
								<!-- Login form -->


<?php


try {
	
	require_once('db_signer.php');  

	

	if ($_SERVER['REQUEST_METHOD'] == "POST"){

		if (isset($_POST['login'])){

			$email=trim($_POST['email']);
			
			$pw= trim($_POST['pwd']);

			$sql = "SELECT pass FROM signer WHERE email = ?";

			$stmt= $coneh->prepare($sql);

			$stmt->execute([$email]);

			$hashy = $stmt->fetch(PDO::FETCH_ASSOC);
			 
			
		//copyright jovial codes . com
				while ($t = $hashy ){
						$y = $t['pass'];

						$valid= password_verify($pw, $y);
						break;
					}
		if (isset($_POST['login'])){
				if (empty($email) || empty($pw)) {

					$Emsg = "input field should not be left empty";
				}
else {			
	if ($stmt->rowCount() > 0  AND $valid )   {
						
		header("location:dashboard.php");

		
			}
				else{
				$Emsg =  "invalid password or username";
				}	
			
			}


	}

}

}

}

catch (PDOException $e){
	echo "This is an error message sir". $e->getMessage();
}

?>


								<form method="POST" action="login read.php">


									<p class="h3 text-center mb-4">Sign in</p>
									<?php 
if (isset($Emsg)){
	 echo '<label style="color:red;">'.$Emsg.' </label>';
} 
?> 
									<div class="md-form">
										<i class="fa fa-envelope prefix grey-text"></i>
										<input type="email" placeholder="enter username or password" name="email" id="defaultForm-email" class="form-control" mdbActive>
										<label for="defaultForm-email">Your email</label>
									</div>

									<div class="md-form">
										<i class="fa fa-lock prefix grey-text"></i>
										<input type="password"  name="pwd" id="defaultForm-pass" class="form-control" mdbActive>
										<label for="defaultForm-pass">Your password</label>
									</div>

									<div class="text-center">
										<button class="btn btn-default waves-light"  type="submit" name="login">Login</button>
									</div>

									<div class="text-muted"> <a href="forgotpassword.php" > Forgot Password?  </a> </div>
								</form>
								<!-- Login form -->
									 
								<hr>
								<!--Twitter-->
								<a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
								<!--Linkedin-->
								<a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a>
								<!--Facebook-->
								<a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
								<!--Email-->
								<a class="icons-sm email-ic"><i class="fa fa-envelope"> </i></a>
								 
							</div>
							<!--/.Card--> 
						</div>
						<!--/.Card-->
					</div>
					<!--/Fourth column column-->
				</div>
				<!--/First row-->
			</section>
			<!--Section: Products v.1-->
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