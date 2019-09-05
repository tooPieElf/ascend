<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ascendancy &mdash; Get expert tutors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get expert tutors for your kids. prepare for WAEC,JAMB, Post UME and other examinations" />
    <meta name="keywords" content="expert tutoring, jamb preparation, waec preparation, teaching, tutors, mathematics homework, learn, home tutorials, ascendancy, mentorship, career advice, coaching, iron shapens iron." />
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
    color: #2DCF94;


}

@media screen and (max-width: 768px) {
    .mybutton{
        float: right; 
        right: 100px;
        font-weight: italic;
        font-size:14px;
    }
}
@media screen and (max-width: 480px) {
    .mybutton{
        float: right; 
        right: 30px;
        font-weight: bold;
        font-size:10px;
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
        <form id="login-form" action="registration.php" method = "post">
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
  echo '<button href="#" role="button" data-toggle="modal" data-target="#login-modal" class="btn btn-primary btn-outline with-arrow" >Login</button> ';
} else {
    echo '<a href="logout.php"><button class="btn btn-primary btn-outline with-arrow" name="logout"/>Log Out</button></a>
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
        