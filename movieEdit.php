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
            include("AdminNavBar.php");
        ?>
    <br>
    <div class="container">
        <!-- Content here -->
        
        <h3>Edit</h3>
        <hr class="my-4">
        <?php 
          
            include("movieEditBack.php");  
  
        ?>
       
</div>
       

        
    </body>
</html>