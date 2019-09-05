<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<?php 
 include_once 'header.php';
?>


<body>

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
    
<?php 
 include_once 'footer.php';
?>