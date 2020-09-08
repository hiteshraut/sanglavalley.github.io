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

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/demo.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/stylevideo.css">

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
	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/set2.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" /> -->

	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	 <script src="js/fc03f4d5b5.js"></script> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

	

	<header id="fh5co-header" role="banner">
		<div class="container header-part hide-nav-scroll">
				<div class="logo-icon">
					<a href="index.php">	<img src="images/logo.png" alt="LOGO" /></a>
				</div>
				<div class="header-inner">
					<!-- 	<h1 style="width: 42px;height: 72px;background: #efb81e;"><a href="index.html">M</a></h1> -->
				<div class="slider-text-top">

					<ul id="tabs">
				        <li>
				            <a href="sangla.html">
				            	Discover unexplored Gems in the Himalayas
								<p>Know more</p>
							</a>
				        </li>
				        <li>
				            <a href="sangla.html">
				            	Misty mornings and gorgeous valleys
								<p>Know more</p>
				            </a>
				        </li>
				        <li>
				            <a href="sangla.html">
				            	Escape into an experience of a lifetime
								<p>Know more</p>
				            </a>
				        </li>
				    </ul>
				</div>

				<div class="menu" style="top: 52px;">Menu 
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
					   			<a href="booknow.php">
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
			       	<li><a href="#" onclick="window.location.reload()">HOME</a></li>
			        <li><a href="aboutus.html">ABOUT US</a></li>
			        <li><a href="sangla.html" >SANGLA VALLEY</a></li>
			        <li><a href="thingtodo.html">THINGS TO DO</a></li>
			        <li><a href="rooms.html" >ROOMS</a></li>
			        <li><a href="booknow.php" >BOOK NOW</a></li>
			        <li><a href="sangla.html#fh5co-blog-section">HOW TO REACH</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
	
	
		<aside id="fh5co-hero" class="js-fullheight">
			
			<div class="video-wrap">
				<div class="video-inner">
					<video class="video-player" src="media/sangla.mp4" poster="media/woods.jpg" preload="auto">
						<source src="media/woods.webm" type='video/webm; codecs="vp8.0, vorbis"'>
						<source src="media/woods.ogg" type='video/ogg; codecs="theora, vorbis"'>
						<source src="media/woods.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
						<p>Sorry, but your browser does not support this video format.</p>
					</video>
					<button class="action action--close"><i class="fa fa-close"></i><span class="action__label action__label--hidden">Close preview</span></button>
				</div> <!-- /video-inner -->
			</div><!-- /video-wrap-->
		

			<div class="flexslider js-fullheight">
				<ul class="slides">
				   	<li style="background-image: url(images/banner4.jpg);">
				   		<div class="container">
				   			<div class="col-md-12 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Discover unexplored Gems in the Himalayas</h2>
				   				</div>
				   			</div>
				   		</div>

				  		<button class="v-load action action--hidden action--play">
							<i class="fa fa-play" style="padding: 28px;font-size: 1.2em;"></i><span class="action__label">	</span>
						</button>
				   	</li>
				
					<li style="background-image: url(images/banner5.jpg);">
				   		<div class="container">
				   			<div class="col-md-12 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Misty mornings and gorgeous valleys</h2>
				   				</div>
				   			</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/banner6.jpg);">
				   		<div class="container">
				   			<div class="col-md-12 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Escape into an experience of a lifetime</h2>
				   				</div>
				   			</div>
				   		</div>
				   	</li> 
			  	</ul>
			 

		  		<div class="social-icon-banner">
			  		<a href="#"><i class="fa fa-instagram"></i></a>
			  		<a href="https://www.facebook.com/Mehta-Hotel-1306026262847270/" target="_blank"><i class="fa fa-facebook"></i></a>
				 </div>
		  	</div>
		</aside>


	</header>

	<section>
		<div id="" class="fh5co-light-grey-section text-vertical-center">
			<div class="container">
		
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>MOODS</h2>
						<p>In the mood to book right away and take off? Find your experience here. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 animate-box moods">

						<div class="moods-div">
						  <figure>
						    <img src="images/layer-3@2x.jpg" alt="ADVENTURE"   />
						    <figcaption><div><a href="thingtodo.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>ADVENTURE</h3>
						</div>
						 
						<div class="moods-div">
						  <figure>
						    <img src="images/layer-4@2x.jpg" alt="BUDDYTRIPS"  />
						    <figcaption><div><a href="thingtodo.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>BUDDY TRIP</h3>
						</div>
						  
						<div class="moods-div">
						  <figure>
						    <img src="images/layer-5@2x.jpg" alt="SOLO TRAVEL"  />
						    <figcaption><div><a href="thingtodo.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>SOLO TRAVEL</h3>
						</div>
						<div class="moods-div">
						  <figure>
						    <img src="images/layer-6@2x.jpg" alt="ROMANCE"  />
						    <figcaption><div><a href="thingtodo.html">VIEW MORE</a></div></figcaption>
						  </figure>
						   <h3>ROMANCE</h3>
						</div>
						<div class="moods-div">
						  <figure>
						    <img src="images/layer-7@2x.jpg" alt="Thumb"  />
						    <figcaption><div><a href="sangla.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>BIKERS</h3>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	</section>

	<section class="why-us" style="">
		<div id="fh5co-pricing-section" class="text-vertical-center1">
			<div class="container">
				<div class="row" style="height: 12%;">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2 style="margin-top: 40px;">WHY US</h2>
						<p>A luxurious stay, comfortable trips to the unexplored places and offers that make you go wow. Live that perfect vacation you’ve always longed for. </p>
					</div>
				</div>
			</div>
		
			
				<div class="row" style="margin:0;background: #fafbfe;">
					<div class="col-md-6 why1 animate-box">
					<img src="images/layer-13@3x.jpg" alt="" style="" class="img-responsive"  /> 
						<div class="why-us1">
							<h5>The last village in India</h5>
							<p>Credibly e-enable empowered <br> innovation without <br> functionalized human capital. </p>
							<a href="sangla.html" > Know more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 why2 animate-box">
						<div class="why-us2">
							<h5>Ignite the adventurer in you</h5>
							<p>Credibly e-enable empowered <br> innovation without <br>functionalized human capital.  </p>
							<a href="sangla.html" > Know more</a>
						</div>
						<img src="images/layer-14@3x.jpg" alt=""  width="100%"  class="img-responsive"  /> 
						<div class="why-us2-responsive">
							<h5>Ignite the adventurer in you</h5>
							<p>Credibly e-enable empowered innovation without functionalized human capital.  </p>
							<a href="sangla.html" > Know more</a>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6 why3 animate-box">
						<img src="images/img-why-3.jpg" alt="" height="210px;" width="100%" /> 
						<div class="why-us3">
							<h5>Away from the crowds </h5>
								<p style="width: 218px;">Credibly e-enable empowered <br> innovation without <br> functionalized human capital.<br> Holisticly coordinate resource <br> sucking "outside the box" <br> thinking with synergistic value. Authoritatively. </p>
							<a href="sangla.html" > Know more</a>
						</div>
					</div>
				</div>
		</div>
	</section>
	
	<section class="best-offers">
		<div id="" class="fh5co-light-grey-section text-vertical-center">
			<div class="container" style="position: relative;">
			<div class="">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>BEST OFFERS</h2>
						<p>Offers that never end, just like your adventures in the hills.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 animate-box best-offers text-center">
						<div class="offers-div">
						  <figure>
						    <img src="images/layer-14@2x.jpg" alt="ACCOMODATION"  />
						    <figcaption><div><a href="rooms.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>ACCOMODATION</h3>
						</div>
						 
						<div class="offers-div">
						  <figure>
						    <img src="images/layer-15@2x.jpg" alt="TREKS"  />
						    <figcaption><div><a href="thingtodo.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>TREKS</h3>
						</div>
						  
						<div class="offers-div">
						  <figure>
						    <img src="images/layer-16@2x.jpg" alt="TRIPS"  />
						    <figcaption><div><a href="sangla.html">VIEW MORE</a></div></figcaption>
						    
						  </figure>
						   <h3>TRIPS</h3>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<div id="fh5co-blog-section" class="fh5co-light-grey-section" style="padding: 4em 0;">
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


	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-4 col-sm-12 col-xs-5 ">
				<ul class="float">
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="sangla.html">Sangla Valley</a></li>
					<li><a href="thingtodo.html">Things to Do</a></li>
					<li><a href="rooms.html">Place to Go</a></li>
					<li><a href="booknow.php">Book Now</a></li>
					<li><a href="sangla.html#fh5co-blog-section">How Reach</a></li>
				</ul>
			</div>

			<div class="col-md-4 col-sm-12 col-xs-7 text-center">
				<img src="images/logo@2xp.png" style="height: 120px;margin-top: 7px;margin-bottom: 30px;" />
			</div>

			<div class="col-md-offset-1 col-md-3 col-sm-12 col-xs-12">
				
				<ul class="fh5co-social">
					<li>Call/email us and send in your requirements.</li>
					<li><a href="#" style="color: #efb81e;">Mehtahotel@gmail.com</a></li>
					<li style="margin-top: 30px;">Call us here :</li>
					<li><a href="#" style="color: #efb81e;">+91 78072 97788, +91 78072 97788</a></li>
				</ul>
			</div>
		
			
		</div>
		<a href="#" class="go-top"><img src="images/top.png" /> </a>
	</footer>
	
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
	
	<!-- jQuery -->
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
	<script src="js/classie.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	
	<script type="text/javascript">
		
		//using TweenLite.set() takes care of all vendor-prefixes
		TweenLite.set(".cardWrapper", {perspective:800});
		TweenLite.set(".card", {transformStyle:"preserve-3d"});
		TweenLite.set(".back", {rotationY:-180});
		TweenLite.set([".back", ".front"], {backfaceVisibility:"hidden"});

		$(".cardWrapper").hover(
		  function() {
		    TweenLite.to($(this).find(".card"), 1.2, {rotationY:180, ease:Back.easeOut});
		  },
		  function() {
		    TweenLite.to($(this).find(".card"), 1.2, {rotationY:0, ease:Back.easeOut});  
		  }
		);

		//a nice little intro;)
		TweenMax.staggerTo($(".card"), 1, {rotationY:-180, repeat:1, yoyo:true}, 0.1);


		$('#toggle').click(function() {
	   	$(this).toggleClass('active');
	   	$('#overlay').toggleClass('open');
	  	});




		$(document).ready(function () {
            var timeInterval, tabCount = 0, currnetIndex = 1;
            tabCount = $('ul#tabs').find('li a').length;
            var tabContentObj = $('.tabContent');
            changeTabIndex();
            timeInterval = setInterval(function () { changeTabIndex(); }, 4 * 1000);

            function changeTabIndex() {
                if (currnetIndex > tabCount) {
                    currnetIndex = 1;
                }
                tabContentObj.hide();
                $('ul#tabs').find('li.selected').removeClass('selected');
                var currentAncorObj = $('ul#tabs').find('li a').eq(currnetIndex - 1);
                currentAncorObj.parent().addClass('selected');
                $(currentAncorObj.attr('href')).show();
                currnetIndex++;
            };

            $('#tabs li').mouseenter(function () {
                clearInterval(timeInterval);
            }).mouseleave(function () {
                timeInterval = setInterval(function () { changeTabIndex(); }, 4 * 1000);
            });

            $('#tabs li a').click(function () {
                tabContentObj.hide();
                $('ul#tabs').find('li.selected').removeClass('selected');
                var currentAncorObj = $(this);
                currnetIndex = $('ul#tabs').find('li a').index($(this)) + 1;
                currentAncorObj.parent().addClass('selected');
                $(currentAncorObj.attr('href')).show();
                currnetIndex++;

                //return false;
            });



      //       $(".v-load").click(function () {
		    //     $(".header-part").css('background-color', 'rgba(0, 0, 0, 0)');
		    //      $(".slider-text-top a").css('color', '#fff');
		    // });

        });


      
		$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});
			
			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 1200);
			})
		});

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

</script>
</html>

