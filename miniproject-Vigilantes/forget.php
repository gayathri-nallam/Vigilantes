<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>forgot password page</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
         <link rel="stylesheet" type="text/css" href="forget.css"/>
    </head>
    <body> 
        <?php include 'head.php' ;?>
        <div id="reset-box">
            
                <h2>Forgot Password?</h2>
                <label for="email">Email:</label>
                <input type="text" placeholder="Enter Valid Email"/><br>
                <button class="btn">Submit</button>
            <div class="backto">
                Back to <a href="login.php" class="bluish-text">Login</a>
            </div>
        </div><?php
        include 'footer.php';
        ?>
    </body>
</html>
