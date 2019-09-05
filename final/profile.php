<?php
/* Displays user information and some useful messages */
session_start();
require 'db.php';

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>



  <?php include_once 'header.php'; ?>

  


  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(images/SUtutoring.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>welcome!! <?= $first_name ?>!! </h2>
                
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>

  <div class="fh5co-about animate-box">
    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
      <h2>we have you at heart <?= $first_name ?> <?= $last_name ?> </h2>
      <p>While we are still verifying the information you provided, we encourage you to take out sometime and review some of the information you provided. After the verifications, here will be unlocked in full</p>
    </div>  
   
  </div>
  <div class="form">

       
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active )  {
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the link sent to your mail!
              </div>';
          }
          
          ?>
          
          
          
          
          
    </div>
    
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

<?php  
include_once 'footer.php';

?>