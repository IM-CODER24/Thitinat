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
       

        <div class="jumbotron jumbotron-fluid" id="jumbotronn">
            <div class="container">
                <h1 class="display-4">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-reels-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 8a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8z"/>
                <circle cx="3" cy="3" r="3"/><circle cx="9" cy="3" r="3"/></svg> MAJING CINEMA </h1>
                <p class="lead">
                We want to create a website that show movie in cinema. 
                It will also show detail about each movie,  time and description. 
                The user can also search for movies they are interested in. it will show movie’s detail,
                 theater time that the movie’s shown.

                </p>
            </div>
        </div>

        <div class="table">
            <div class="row">
                <div class="col">
                    <h2>"Hot Today"</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: auto;">
                        <img src="https://previews.123rf.com/images/monicaodo/monicaodo1509/monicaodo150900014/46077639-fast-food-restaurant-poster-with-retro-pizza.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: auto">
                        <img src="https://cometofinland.fi/wp-content/uploads/2019/01/POD-M-28_Hangolady_1080px_150dpi.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: auto;">
                        <img src="https://cdn4.vectorstock.com/i/1000x1000/48/28/pizza-poster-vector-2674828.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>