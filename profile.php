<?php 
ob_start();
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
       

        <?php include("profileBack.php"); ?>
        <h2> Wish list </h2>

        <?php include("order_show.php"); ?>

    </body>
</html>