<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email_id'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>login design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css" type="text/css"/>

</head>
    <body>
    <div id="login-page">
        <form action="login_new.php" method="POST">
                <h2>Login</h2>
                <label for="username">UserName:</label><br>
                <input type="text" name="email" placeholder="Email" required = 'true' pattern="[a-0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/><br>
          
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Password" required="true" pattern=".{6,}"/><br>
               
                <button class="btn">Login<a href="index.php"></a></button>
                <a href="forget.php" >Forgot Password?</a>
               
        </form>
        <form align="center">
            <p> Not Registered Yet? <a href="signup.php">Create Account</a></p>
        </form>
        </div>
         <?php include 'footer.php'; ?>
    </body>
</html>
