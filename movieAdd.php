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
        <div class="Add_Movie_Content">
        <h3>Add Movie</h3>
        <form action="movieAdd_Back.php" method="POST" >
            <div class="form-group">
                <label >Name of Movie</label>
                <input type="text" class="form-control" name="name" required>
                
            </div>
            <div class="form-group">
                <label >Description</label>
                <textarea class="form-control" rows="3" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label >Length (in minute)</label>
                <input type="number" class="form-control" name="length" required >
                
            </div>

            <div class="form-group">
                <label >Image URL</label>
                <input type="text" class="form-control" name="url" required>
            </div>
            

            <button type="submit" class="btn btn-primary" value="Register">Submit movie</button>
        </form>
</div>
       <hr class="my-4">

        
    </body>
</html>