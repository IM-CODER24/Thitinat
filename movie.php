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
           if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
            include("navbar.php");
        }
        else{
            include("navbarLogin.php");
        }
        
        ?>
    <br>
    <div class="container">
        <!-- Content here -->
        <?php 
           if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
            include("warning.php");
            include("movieback.php");
        }
            else {
                include("movieShow.php");
            }
            
        ?>

  
    </body>
</html>