<?php 
ob_start();
session_start();
?>
<html>
<title>
    Register Admin page
</title>

<body onload="logInClick()">
    <?php 
        include("navbar.php");
        include("bootstrap.php");
    ?>
    <div>

        <!-- REEEEEEEEEEEEEEGISSSSSSSTERRRRRRRRRRRRRRR -->
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col">
                    <div id="regisContent">
                        <h2>Register</h2>

                        <form action="Adminback.php" method="POST">
                            <label for="exampleInputEmail1">Name</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="First name" name="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name" name="lastName"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="text" class="form-control" name="username" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" required>
                            </div>

                            <button type="submit" class="btn btn-primary" value="Register">register</button>
                        </form>
                        <hr class="my-4">
                        <small>Already register?</small>
                        <a href="#" onclick="logInClick()">Log in now</a>


                    </div>

                    <div id="loginContent">
                        <h2>Log in</h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <hr class="my-4">
                        <small>If you don't any account yet</small>
                        <a href="#" onclick="regisClick()">Register now</a>
                    </div>

                </div>
                <div class="col-2"></div>

            </div>

            <a href="movieEdit.php">go to edit (will delete later)</a>
        </div>
    </div>

    <script>
        function regisClick() {
            document.getElementById('loginContent').style.display = 'none'
            document.getElementById('regisContent').style.display = 'block'
        }

        function logInClick() {
            document.getElementById('loginContent').style.display = 'block'
            document.getElementById('regisContent').style.display = 'none'
        }
    </script>
</body>

</html>