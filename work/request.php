<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<?php 
 include_once 'header.php';
?>




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
              <button type= "submit" class="btn btn-primary btn-lg btn-block" name="login" >Login</button>
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



				
				
			</div>
		</div>
	</header>
	

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/adult-education.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Nothing beats close tutoring</h2>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-about animate-box">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<h2>we have you at heart</h2>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </p>
		</div>	
		<div class="container">
			<div class="col-md-12">
				<figure>
					<img src="images/education.jpg" alt="ascendancy" class="img-responsive">
				</figure>
			</div>
			<div class="col-md-8 col-md-push-4">
				<h2>A Startup Company</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			</div>
		</div>
	</div>
	





 <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Questions? Book an Appointment</h2>
                        </div>
                        <form  id="myForm" action ="includes/signup.inc.php" method = "post">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Phone Nmber</label>
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">
                                    </div>
                                </div>
                                
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="primary">Primary school</option>
                                            <option value="junior">Junior secondary</option>
                                            <option value="Senior">Senior secondary</option>
                                            <option value="exam preparation">Exam preparation</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>
                                </div>
                                            


                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="Gender">Preferred Gender</label>
                                        <select id="Gender" name="Gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="submit"  name="submit"  type ="submit" value="submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                              </div>

                        </form>
                       <!--Another test form-->   
                     

                    
					           
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h1>Why make this Appointment?</h1>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Dedicated and Passionate tutors</h4>
                                <div class="feature-content">
                                    <p>We are driven passion to teach. When you appoint us, we make teaching your ward our business, we will motivate, explain concisely and become your childs personal friend. This way we will defeat any phobia which hinders academic success.   </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Tutors</h4>
                                <div class="feature-content">
                                    <p> You are assured that our well selected tutors will use modern learning techniques to ensure children graps most difficult concepts easily, and will remember it when it is required</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Affordable</h4>
                                <div class="feature-content">
                                    <p>We will work with your budget, to ensure the best results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
<!--form end-->
	<div class="fh5co-cta" style="background-image: url(images/bright_child.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>You do not want to wait longer</h3>
				<p><a href="#myForm" class="btn btn-primary btn-outline with-arrow">Request a tutor. <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>




<?php 
 include_once 'footer.php';
?>
	



	

	
