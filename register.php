<?php 
ob_start();
session_start();
?>
<html>
    <title>
        Register Page
    </title>

<body onload="logInClick()">
    <?php 
        include("navbar.php");
        include("bootstrap.php");
    ?>


    
    <div class="container">
        <!-- Content here -->


        <div id="content">
            <div class="row">
                <div class="col-2"></div>
                <div class="col">
                    <div id="loginContent">
                        <h2>Log in</h2>
                        <form action="logINBack.php" method="POST" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="int" class="form-control" name="email" required >
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" require>
                            </div>

                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </form>
                        <hr class="my-4">
                        <small>If you don't any account yet</small>
                        <a href="#" onclick="regisClick()">Register now</a>
                    </div>
                    <div id="test"> </div>

                    <div id="regisContent">
                        <h2>Register</h2>

                        <form action="registerBack.php" method="POST">
                            <label for="exampleInputEmail1">Name</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="First name" name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name" name="lastName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="gmail" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telephone number</label>
                                <input type="number" class="form-control" name="telNum" required>

                            </div>
                            
                            <button type="submit" class="btn btn-primary" >register</button>
                        </form>
                        <hr class="my-4">
                        <small>Already register?</small>
                        <a href="#" onclick="logInClick()">Log in now</a>

                    </div>


                </div>
                
                <div class="col-2"></div>
            </div>
        </div>




    </div>
 <!-- Optional JavaScript -->
 <script>
        function regisClick() {
            document.getElementById('loginContent').style.display = 'none'
            document.getElementById('regisContent').style.display = 'block'
        }

        function logInClick() {
            document.getElementById('loginContent').style.display = 'block'
            document.getElementById('regisContent').style.display = 'none'
        }

        function showUser() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("test").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","UserBack.php?q="+id,true);
    xmlhttp.send();
  }

        
    </script>
</body>

</html>