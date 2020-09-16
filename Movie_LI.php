<?php 
ob_start();
session_start();
include("config.php");
?>
<html>
    <head>
        <title>
            Cinima Booking
        </title>
        <?php 
            include("bootstrap.php");
        ?>
    </head>

    <body>
        <?php 
            include("navbarLogin.php");
        ?>
    <br>
    <div class="container">
        <!-- Content here -->
       

        <div class="jumbotron jumbotron-fluid" id="jumbotronn">
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
                </p>
            </div>
        </div>

        <?php 
            include("movieback.php");
        ?>

  
    </body>
</html>