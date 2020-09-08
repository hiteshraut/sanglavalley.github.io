<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hiteshraut22@gmail.com";
    //$email_to = "mehtahotel@gmail.com";
    $email_subject = "Sangla valley";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
  
<div class="success-msg">
	<!-- <i id="hide" style="float: right;top: -40px;position: relative; right: -15px;" class="fa fa-close"></i> -->
	Thank you for contacting us. We will be in touch with you very soon.
	<button id="hide">OK</button>
</div>
 
<?php
 
}
?>  
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sangla Valley </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/sangla.css">
	<link rel="stylesheet" href="css/demo.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	<link href="css/style-gal.css" type="text/css" rel="stylesheet" />


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="js/fc03f4d5b5.js"></script>
	<style type="text/css">
		.success-msg {
		    position: absolute;
		    z-index: 9999;
		    max-width: 350px;
		    height: auto;
		    background: #fff;
		    color: #000;
		    font-size: 18px;
		    top: 30%;
		    padding: 50px 30px;
		    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.45);
		    margin: 0 auto;
		    left: 0;
		    right: 0;
		    border-radius: 3px;
		}

		.success-msg button{
			background: #fff;
		    border: 1px solid #2a2a2a;
		    width: 80px;
		    font-size: 12px;
		    height: 30px;
		    margin-top: 20px;
		}
	</style>
	</head>
	<body>
	<header id="fh5co-header">
		<div class="container hide-nav-scroll" style="position: absolute;z-index: 9;width: 100%;">
			<div class="logo-icon">
				<a href="index.php">	<img src="images/logo.png" alt="LOGO" /></a>
			</div>
			<div class="header-inner">
				<div class="slider-text-top">
				</div>
				<div class="menu">Menu 
					<!-- <img id="toggle" src="images/menu.png" height="20" style="padding-left: 20px;"> -->
					<div class="button_container" id="toggle">
						  <span class="top"></span>
						  <span class="middle"></span>
						  <span class="bottom"></span>
					</div>  
				</div>
			</div>
			<div class="overlay" id="overlay">
			 	<div class="logo-icon" style="padding-top: 25px;padding-left: 3px;position: fixed;left: 2%;">
					<a href="index.php">	<img src="images/logo.png" alt="LOGO" /></a>
				</div> 
			 	<nav class="overlay-menu" style="float: none;">
			  		<div class="container">
				 	<div class="row social-icon" style="border-bottom: 1px solid #ccc;margin: 0px;">
					  	<div class="col-sm-12 text-left animate-box" style="padding: 0px;">
					  		<a href="https://www.facebook.com/Mehta-Hotel-1306026262847270/" target="_blank"><i class="fa fa-facebook"></i></a>
					  		<a href="#"><i class="fa fa-instagram"></i></a>
					  	</div>
				  	</div>
					   	<div class="row menu-img">
					   		<div class="col-sm-4 animate-box">
						   		<a href="aboutus.html">
						   		<div class="menu-item">
						   			<img src="images/layer-14m@2x.jpg"  class="img-responsive" />
						   		</div>
						   		<h6>About Us</h6>
						   		</a>
					   		</div>
					   		<div class="col-sm-4 animate-box">
					   			<a href="sangla.html">
					   			<div class="menu-item">
					   				<img src="images/layer-15m@2x.jpg" class="img-responsive"  />
					   			</div>
					   			<h6>Sangla Valley</h6>
					   			</a>
					   		</div>
					   		<div class="col-sm-4 animate-box">
					   			<a href="thingtodo.html">
					   			<div class="menu-item">
					   				<img src="images/layer-19@2x.jpg"  class="img-responsive" />
					   			</div>
					   			<h6>Things To Do</h6>
					   			</a>
					   		</div>
					   		<div class="col-sm-4 animate-box">
					   			<a href="rooms.html">
					   			<div class="menu-item">
					   				<img src="images/layer-17@2x.jpg"  class="img-responsive"  />
					   			</div>
					   			<h6>Rooms</h6>
					   			</a>
					   		</div>
					   		<div class="col-sm-4 animate-box">
					   			<a href="#" onclick="window.location.reload()">
					   			<div class="menu-item">
					   				<img src="images/layer-18@2x.jpg" class="img-responsive"  />
					   			</div>
					   			<h6>Book Now</h6>
					   			</a>
					   		</div>
					   		<div class="col-sm-4 animate-box">
					   			<div class="menu-item">
					   				<a href="sangla.html#fh5co-blog-section">
					   				<img src="images/layer-16m@2x.jpg"  class="img-responsive" />
					   			</a>
					   			</div>
					   			<h6>How To Reach</h6>
					   		</div>
					    </div>
				    </div>
		  		</nav>
			</div>
		</div>


		<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
		  	<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.php"><img src="images/logo-res.png" height="40" /></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav text-right">
			       	<li><a href="index.php">HOME</a></li>
			        <li><a href="aboutus.html">ABOUT US</a></li>
			        <li><a href="sangla.html" >SANGLA VALLEY</a></li>
			        <li><a href="thingtodo.html">THINGS TO DO</a></li>
			        <li><a href="rooms.html">ROOMS</a></li>
			        <li><a href="#" onclick="window.location.reload()">BOOK NOW</a></li>
			        <li><a href="sangla.html#fh5co-blog-section">HOW TO REACH</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>

	</header>

	<main>
        <div id="slide-1" class="homeSlide" >
        	<div class="bcg4" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -300px;" data-anchor-target="#slide-1">
	        	<div class="hsContainer">
		    		<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-1 h2">
			    		<h2>BOOK NOW</h2>
		    		</div>
	        	</div>
        	</div>
	    </div>
	</main>

	<section id="fh5co-pricing-section" style="padding: 2em 0px 40px;">
		<div class="container">
			<div class="container contact-form">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>CONTACT US</h2>
						<p>Fill this form and send in any queries you may have</p>
					</div>
				</div>
			  	<form name="contactform" method="post" action="">
				<div class="row">
					<div class="col-md-offset-3 col-md-3 col-sm-6 contact-us-f animate-box text-right">
						<input type="text" placeholder="NAME" name="first_name" maxlength="50" size="30" >
						<input type="email" placeholder="EMAIL" name="email" maxlength="80" size="30" >
						<input type="text" placeholder="PHONE" name="telephone" maxlength="30" size="30">
					</div>
					<div class="col-md-4 col-sm-4 animate-box contact-us-f">
						<textarea cols="4" rows="5" placeholder="MESSAGE" name="comments" maxlength="1000"></textarea>
					</div>
				</div>
				<div class="row contact-form">
					<div class="col-sm-12 text-center animate-box">
						 <input class="input-btn" type="submit" value="Submit" >   
						

					</div>
				</div>

			</form>
			</div>

		</div>
	</section>
		


	<section>
	<div class="map-container animate-box">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2024.3468347927621!2d78.26489133104914!3d31.427018089199848!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x477e5000b19111f8!2sMehta+Guest+House!5e0!3m2!1sen!2sin!4v1499760738821" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	</section>

	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-4 col-sm-12 col-xs-5 ">
				<ul class="float">
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="sangla.html">Sangla Valley</a></li>
					<li><a href="thingtodo.html">Things to Do</a></li>
					<li><a href="rooms.html">Place to Go</a></li>
					<li><a href="#" onclick="window.location.reload()">Book Now</a></li>
					<li><a href="sangla.html#fh5co-blog-section">How Reach</a></li>
				</ul>
			</div>

			<div class="col-md-4 col-sm-12 col-xs-7 text-center">
				<img src="images/logo@2xp.png" style="height: 120px;margin-top: 7px;margin-bottom: 30px;" />
			</div>

			<div class="col-md-offset-1 col-md-3 col-sm-12 col-xs-12">
				
				<ul class="fh5co-social">
					<li>Call/email us and send in your requirements.</li>
					<li><a href="#">Mehtahotel@gmail.com</a></li>
					<li style="margin-top: 30px;">Call us here :</li>
					<li><a href="#">+91 78072 97788, +91 78072 97788</a></li>
				</ul>
			</div>
		
			
		</div>
		<a href="#" class="go-top"><i class="fa fa-chevron-circle-up" aria-hidden="true" ></i> </a>
	</footer>
	
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	<script type="text/javascript" src="main.js"></script>


	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/imagesloaded.js"></script>
	<script src="js/skrollr.js"></script>
	<script src="js/_main.js"></script>

	<!-- <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script> -->
	<script src="js/jquery.picEyes.js"></script>
	<script>
		
		$('#toggle').click(function() {
		   $(this).toggleClass('active');
		   $('#overlay').toggleClass('open');
		  });


		$('.map-container')
			.click(function(){
					$(this).find('iframe').addClass('clicked')})
			.mouseleave(function(){
					$(this).find('iframe').removeClass('clicked')});

			
			$(document).ready(function() {
			$("#hide").on("click", function(e) {
			  	e.preventDefault();
		    
		    	 $(".success-msg").hide();
		    	return false;
				});
			});


		(function ($) {
		  $(document).ready(function(){
		    
			// hide .navbar first
			$(".navbar").hide();
			
			// fade in .navbar
			$(function () {
				$(window).scroll(function () {
		            // set distance user needs to scroll before we fadeIn navbar
					if ($(this).scrollTop() > 200) {
						$('.navbar').fadeIn();
						$('.hide-nav-scroll').fadeOut();
					} else {
						$('.navbar').fadeOut();
						$('.hide-nav-scroll').fadeIn();
					}
				});

			
			});

		});
		  }(jQuery));
	</script>
  
	</body>

</html>

