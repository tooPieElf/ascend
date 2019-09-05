<?php
/* Displays all successful messages */
session_start();
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
                            <h2>Success!</h2>
                            <p class="fh5co-lead"><?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?></p>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </aside>


<?php 
 include_once 'footer.php';
?>