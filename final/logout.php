<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:739172,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112057150-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112057150-1');
</script>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ascendancy &mdash; Get expert tutors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get expert home tutors. prepare for WAEC,JAMB, Post UME, ACCA, ICAN, Job interviews and other examinations" />
    <meta name="keywords" content="expert tutoring, JAMB preparation, WAEC preparation, teaching, tutors, homework, home tutorials, mentorship, career advice, coaching" />
    <meta name="author" content="ascendancy" />

  <!-- 
    
 
    DESIGNED & DEVELOPED by Ascendancy academy
        
    Website:        http://ascendancy.com.ng
    Email:          info@ascendancy.com.ng
    

    
     -->

    

    
    <link rel="shortcut icon" href="favicon.ico">

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/basil.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Hotjar Tracking Code for tuteria.com -->


    <script src='https://www.google.com/recaptcha/api.js'></script>
    
   
    

</head>



<style >
.mybutton {
    position: relative;
    list-style: none;
    text-decoration: none;
    float: right;
    right: 360px;
    top:22px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 5px;
    color:#00B906;
    background: #00B906;
    
    
}





@media screen and (max-width: 768px) {
    .mybutton{
        float: right; 
        right: 100px;
        font-weight: bold;
        font-size:14px;
    }
}
@media screen and (max-width: 480px) {
    .mybutton{
        float: right; 
        right: 30px;
        font-weight: bold;
        font-size:12px;
    }
}

 </style>




  <body>
  
  
  <div id="fh5co-page">
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="header-inner">
      <a  href="index.php"><img src=images/bode8.png height="90" width="200" alt="Ascendany"></a>

      <!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <img id="img_logo" src="images/bode8.png">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
      </div>

      <!-- Begin # DIV Form -->
      <div id="div-forms">

        <!-- Begin # Login Form -->
        <form id="login-form" action="index.php" method = "post">
          <div class="modal-body">
            <div id="div-login-msg">
              <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
              <span id="text-login-msg">Type your username and password.</span>
            </div>
            <input id="login_username" class="form-control" type="email" placeholder="email" name= "email" required>
            <input id="login_password" class="form-control" type="password" placeholder="Password"
            name="password" required>
            <div class="checkbox">
              <label>
                                    <input type="checkbox"> Remember me
                                </label>
            </div>
          </div>
          <div class="modal-footer">
            <div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" >Login</button>
            </div>
            <div>
              <button id="login_lost_btn" type="submit" class="btn btn-link">Lost Password?</button>

            </div>
          </div>
        </form>
        <!-- End # Login Form -->

        <!-- Begin | Lost Password Form -->
        <form id="lost-form"  action = "registration.php" method="post" style="display:none;">
          <div class="modal-body">
            <div id="div-lost-msg">
              <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
              <span id="text-lost-msg">Type your e-mail.</span>
            </div>
            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail"  name= "email"required>
          </div>
          <div class="modal-footer">
            <div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
            </div>
            <div>
              <button id="lost_login_btn" type="submit"  name= "login" class="btn btn-link">Log In</button>

            </div>
          </div>
        </form>
        <!-- End | Lost Password Form -->


      </div>
      <!-- End # DIV Form -->

    </div>
  </div>
</div>
<!-- END # MODAL LOGIN -->
            <div class= "mybutton">


          <?php


// Check if user is logged in using the session variable

if (!isset( $_SESSION['logged_in']) ) {
  echo '<button href="#" role="button" data-toggle="modal" data-target="#login-modal" cclass="btn btn-primary btn-sm" >Login</button> ';
} else {
    echo '<a href="logout.php"><button class="btn btn-primary btn-sm" name="logout"/>Log Out</button></a>
';

}
?>
                        
                            
                        
                </div>
        
				<nav role="navigation">
          <ul>
                        <li><a href="request.php">Request a tutor</a></li>
                        <li><a href="registration.php">Register</a></li>

                    </ul>
					
				</nav>
			</div>
		</div>
	</header>
	



	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/australia.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Thanks for stopping by</h2>
		   					<p class="fh5co-lead">We hope to see you again</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div class="fh5co-cta" style="background-image: url(images/bright_child.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>We love you, we hope to see you again</h3>
				<p><a href="request.php" class="btn btn-primary btn-outline with-arrow">Request a tutor. <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
    
 <footer id="fh5co-footer" role="contentinfo">
  
    <div class="container">
      <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
        <h3>About Us</h3>
        <p>Ascendancy came out of the yearn from parents and students for something better, new and would close the gap where most schools lack; simplified teaching, provision of mentorship and motivation to students. The ascendancy team is dedicated and working long hours to ensure the we deliver. Have extra ideas?</p>
        <p><a href="contact.php" target="_blank" class="btn btn-primary btn-outline with-arrow btn-sm">CONTACT US <i class="icon-arrow-right"></i></a></p>
        
      </div>
      <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
        <h3>Our Services</h3>
        <ul class="float">
          <br> Tutoring
           <br>Coaching &amp; mentoring
          <br>Material preparation
           <br>Special recorded topics
          
      
        

      </div>

      <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
        <h3>Follow Us</h3>
        <ul class="fh5co-social">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          
        </ul>
      </div>
      
      <div class="col-md-12 fh5co-copyright text-center">
        <p>&copy; Ascendancy 2017: All rights reserved  
      </div>
      
      
    </div>




  </footer>
  </div>
  
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- MAIN JS -->
  <script src="js/main.js"></script>
  <!--basil-modal-->
  <!--<script src="js/basil.js"></script>-->

  </body>
</html>

	

	

		   		
		   		

			
		

