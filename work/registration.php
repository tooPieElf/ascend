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
        <form id="login-form" action="registration.php" method = "post">
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

        
				<nav role="navigation">
					
				</nav>
			</div>
		</div>
	</header>
	

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/error.jpg);">
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
		<div class="container">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <br>
        <br>
				<h1>Apply to become a Tutor</h1>
				<p>We are very passionate about what we do, we know you are even more passionate. We cannot wait to start working with you awsome being! Register, follow your passion, make some money. </p>
			</div>
		</div>
	


  <!--ncsdj--> 



        
      
</div>




<div class="container">
      <div class="row">
        <div class="col-md-4">
          <div id="mainContent_imageEdit2" class="top20 link">
            <h3>Ascendancy</h3>
            <p>Here are some of the frequently asked questions 
              </p>
          </div>

          

          


          

        </div>
        <div class="col-md-8 pad20">

          <div class="form-bg pad20">

            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">


                
                <form   class="form-horizontal" action= "register.php"  method="POST">

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 action">
                      <h3>Application Form</h3>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 link col-sm-9">
                      <div id="mainContent_imageEdit4">
                        <p>At Ascendancy we are a friendly bunch; we welcome - and read - all applications. We do get lots, though, so please be patient for a response. Unfortunately we turn down far more applications than we accept. &nbsp;A couple of factors
                          will greatly increase your chance of a successful application:</p>

                        <ul>
                          <li>A commitment to tutoring for at least a year period</li>
                          <li>Teaching experience - either in the classroom or as a tutor</li>
                         
                          <li>A passion for education</li>
                        </ul>

                        <p>If we want to proceed with your application, we shall give you a call in the first instance to ask you some further questions about your experience, commitment and subject specialism.</p>

                      

                        

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_firstname"><span>*</span> First Name</label>
                    <div class="col-sm-8">
                      <input type="text"  placeholder="Your First Name" name='firstname' class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_surname"><span>*</span> Surname</label>
                    <div class="col-sm-8">
                      <input type="text"  placeholder="Your Surname" name='lastname' class="form-control" maxlength="250" />
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_email"><span>*</span> Email</label>
                    <div class="col-sm-8">
                      <input type="text"  placeholder="Email Address" name='email' value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_email"><span>*</span> Password</label>
                    <div class="col-sm-8">
                      <input type="password"  placeholder="Email Address" name='password' value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_mobile"><span>*</span> Phone Number</label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor_mobile" placeholder="(For internal use only)" name="tutor_mobile" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                  <div class="form-group"><label class="col-sm-3  control-label" for="tutor_location"><span>*</span> State</label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor-state" placeholder="Enter your state" name="tutor_mobile" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                 
                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_address_1"><span>*</span> Address </label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor_address" placeholder="Address" name="tutor_address" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <h4>Details of Referees:</h4>
                      <p class="small">Please note that referees must not be related to you. If you have attended an academic institution in the last three years this should be one of your references and if you have been employed in the last three years please select
                        your most recent employer. If neither of these apply please select a referee who will be best placed to assess your suitability as a tutor (e.g. a parent of a previous student). If you are invited for an interview with Ascendancy, please note that
                        your referees might be contacted prior to your interview.</p>
                      <div class="top10"></div>
                      <h5>Referee:</h5>
                    </div>
                  </div>

                  <div class="form-group"><label class="col-sm-3  control-label" for="r1_referee_type"><span>*</span> Type</label>
                    <div class="col-sm-6"><select name="r1_referee_type" id="r1_referee_type" class="form-control"><option value="" selected="selected">---- select Referee Type ----</option><option value="Academic">Academic</option><option value="Professional">Professional</option><option value="Academic and Professional">Academic and Professional</option><option value="Other">Other</option></select></div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_type_other">Type 'other'</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_type_other" placeholder="if 'other', please specify" name="r1_referee_type_other" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_title"><span>*</span> Title</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_title" placeholder="e.g. Mr, Mrs, Ms, Dr, Professor" name="r1_referee_title" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_firstname"><span>*</span> First Name</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_firstname" placeholder="" name="r1_referee_firstname" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_surname"><span>*</span> Surname</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_surname" placeholder="" name="r1_referee_surname" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_email_address_1"><span>*</span> Email</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_email_address_1" placeholder="Company, institution or school email address" name="r1_referee_email_address_1" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <p class="small">For academic or professional references this should be their company, institution or school email address.</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_telephone_1"><span>*</span> Telephone</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_telephone_1" placeholder="Telephone Number" name="r1_referee_telephone_1" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="r1_referee_relationship"><span>*</span> Relationship</label>
                    <div class="col-sm-8">
                      <input type="text" id="r1_referee_relationship" placeholder="Referee's connection to tutor" name="r1_referee_relationship" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                 
                  <br>
                  <br>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <div class="top10"></div>
                      <h3>Applicant tutor profile:</h3>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_university"><span>*</span> University</label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor_university" placeholder="" name="tutor_university" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_subject"><span>*</span> Subject</label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor_subject" placeholder="Undergraduate Subject" name="tutor_subject" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_degree"> Degree</label>
                    <div class="col-sm-8">
                      <input type="text" id="tutor_degree" placeholder="If applicable" name="tutor_degree" value="" class="form-control" maxlength="250" />
                    </div>
                  </div>


                  <div class="top20"></div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_biography"><span>*</span> Personal Biography</label>
                    <div class="col-sm-9">
                      <textarea id="tutor_biography" placeholder="" name="tutor_biography" class="form-control" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_experience"><span>*</span> Teaching Experience</label>
                    <div class="col-sm-9">
                      <textarea id="tutor_experience" placeholder="Please tell us a bit about your level of experience. eg. JAMB preparation, common entrance preparation etc " name="tutor_experience" class="form-control" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_whatupto"><span>*</span> Current Situation</label>
                    <div class="col-sm-9">
                      <textarea id="tutor_whatupto" placeholder="What are you up to at the moment? What do you do when you are not tutoring?  name="tutor_whatupto" class="form-control" rows="4"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3  control-label" for="tutor_experience"><span>*</span> subjects</label>
                    <div class="col-sm-9">
                      <textarea id="subjects" placeholder="Please list all the subjects you can teach, seperated by commas. " name="subjects" class="form-control" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3  control-label"><span>*</span> Terms of Use</div>
                    <div class="col-sm-9 link">
                      <div class="checkbox"><label><input type="checkbox" id="tutor_terms" name="tutor_terms" value="True"  />
I agree to Ascendancy Terms of Use </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 top20">
                      <input id= "submit" name="submit" type="submit" class="btn btn-primary"  value="Submit"/>
                    </div>
                  </div>

                </form>
            </div>
            </div>

          </div>
        </div>
      </div>
    </div>

























				
	
		<div class="container">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Your Team Members</h2>
						<p>These are some of the selected few that will be working with you to drive your passion towards teaching </p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Chukwudi Ndimneze</h3>
						<h4>Bsc, child psycologists</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Nathalie Kosley</h3>
						<h4>Co-Founder, CTO</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Yanna Kuzuki</h3>
						<h4>Co-Founder, Principal</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						
					</div>
				</div>
		</div>
	

	<?php 
 include_once 'footer.php';
?>

	

	

		   		
		   		

			
		

