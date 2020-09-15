<?php
require("common.php");
if (isset($_SESSION['email_id'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="signup.css" type="text/css"/>

    </head>
    <body>
        <div id="login-box">
            <div class="left-box">
                <h1> Sign Up</h1>
                <form  action="sign_new.php" method="POST">   
                <input type="text" name="firstname" placeholder="First Name"/>
                <input type="text" name="lastname" placeholder="Last Name"/>
                <input type="text" name="email" placeholder="Email" required = 'true' pattern="[a-0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                <div> <?php echo filter_input(INPUT_GET, 'error'); ?></div>
                <input type="password" name="password" placeholder="Password" required="true" pattern=".{6,}"/>
                <div> <?php echo filter_input(INPUT_GET, 'error'); ?></div>
                <input type="submit" name="signup-button" value="Sign Up" <a href="index.php"></a>
            </form>
            <form align="center">
                <p> Already Registered?<a href="login.php">Login</a>
            </form>
            </div>
            <div class="right-box">
                <span class="signinwith">Sign in with<br/>Social Network</span>
                
                <button class="social facebook">Log in with Facebook</button>
                <button class="social twitter">Log in with Twitter</button>
                <button class="social google">Log in with Google+</button>
                
                
            </div>
            <div class="or">OR</div>
        </div>
       <?php include "footer.php"; ?> 
    </body> 
</html>
