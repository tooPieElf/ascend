

<?php 
/* Main page with two forms: sign up and log in */

session_start();
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
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>


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
              <button type= "submit" class="btn btn-primary btn-lg btn-block" name="login" >Login</button>
            </div>
            <div>
             <a href="forgot.php">Forgot Password?</a>

            </div>
          </div>
        </form>
        <!-- End # Login Form -->

        


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
		   	<li style="background-image: url(images/rsz_adult-education.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2> Give yourself a solid backbone by choosing us</h2>
		   					<p><a href="request.php" class="btn btn-primary ">Request a tutor</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/SUtutoring.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2> We work to bring out the best in you</h2>
		   					<p><a href="request.php" class="btn btn-primary ">Request a tutor</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/bright_child.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Ascendancy works to bring out the best in your child</h2>
		   					<p><a href="request.php" class="btn btn-primary ">Request a tutor</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Why Choose Ascendancy?</h2>
					<p>We have trained professional tutors dedicated to ensure your ward graps the subject and can recall it when called for  </p>
					<p> for each client, we have about trained professional working behind the scene to prepare efficient learning materials and trying to figure out exactly how they learn.
						
					</p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/brian_friendly.svg" alt="friendly" class="img-responsive"></span>
					<h3>Strategy</h3>
					<p>We have reversed the common scenario; a student now gets about five different professionals, personal tutor, a carrer coach, psycologist, media personnel and a motivational speaker.</p>
					
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/strategy.svg" alt="strategy" class="img-responsive"></span>
					<h3>Explore</h3>
					<p>We are not just about study. we have designed special games, plays and experiment to help develop you or your ward depending on their current level of maturity.</p>
					
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/secure.svg" alt="secure" class="img-responsive"></span>
					<h3>Technique</h3>
					<p> with some modern learning techniques and cognition trianing, we are sure you or your ward will easily breeze through what might seem to be a very difficult task. </p>
					
				</div>
			</div>
		</div>
	</div>

	
	<div class="fh5co-section-with-image">
		
		<img src="images/bold.jpg" alt="" class="img-responsive">
		<div class="fh5co-box animate-box">
			<h3> We keep to our promises </h3>
			<p>
			<h4>				
			
				<p> <b>Last term our platform saw many students leap to success on their various academic work.  We love the results, it is remarkable to us and with permission, we shall be publishing thier results here soon. We encourage you to register soon, so your child can be on the ascendancy early.
				 </p>
			 </h4>
			</p>
			
		</div>
		
	</div>

	<div id="fh5co-testimonial" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Happy Clients</h2>
					<p>We have an excellent reputation with our clients </p>
				</div>
				<div class="col-md-4 text-center item-block">

					<blockquote>
						<p>&ldquo; I was sure that my daughter cannot write both her WAEC and JAMB and pass both, so i was only intersted in getting a tutor to help her pass WAEC first, then next year she'll take jamb. But her tutor from ascendancy insisted she takes both. She's now in her second year at UNN doing her prefered course; Nursing. &rdquo;</p>
						<p><span class="fh5co-author"><cite>Mrs Osondu Okoro</cite></span><i class="icon facebook-color icon-facebook pull-right"></i></p>

					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
					<blockquote>
						<p>&ldquo; I find it difficult to believe. I was so scared of mathematics that i knew i would not do well in it. With just few explanations from Uncle stanley, it became so easy for me that i had to go back and check with the textbook if i had really learnt some of the concept and i did, i made my WAEC, i am very happy. &rdquo;</p>
						<p><span class="fh5co-author"><cite>Chinelo okolo

						</cite></span></p>
					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
						
					<blockquote>
						<p>&ldquo; With just barely a month into the tutoring it was clear that my son has had a significant increase in his study. He started showing confidence in his studies, something he had not been doing before.&rdquo;</p>
						<p><span class="fh5co-author"><cite>Mrs jideofo</cite></span></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>We will not disappoint you</h2>
					<p>Finally someone that truely cares </p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
						<figure>
						<img src="images/encourage.jpg" alt="blog"  class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3>We are Experienced</h3>
							
							<p>We have been preparing students for competitive exams for more than 9 years now. We know the worth of your child's destiny, we will not do business with it </p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					
						<figure>
						<img src="images/experienced1.jpg" alt="blog" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3> We Encourage and Motivate</h3>
							
							<p>We will understand your child. Understanding your child's problem will help us determine the best way to motivate and encourage him towards achieving greater academic success. </p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					
						<figure>
						<img src="images/positive.jpg" alt="blog" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3>We Have the right Mindset</h3>
							
							<p>We believe that every child is unique, with strength and weakness. We will find your child's strangths and work to make it better, while ensuring that we take care of his weakness too. </p>
						</div>
					</a>
				</div>
				
			</div>
		</div>	
	</div>

	<div class="fh5co-cta" style="background-image: url(images/bright_child.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>Want to put your child on Ascendancy?</h3>
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
