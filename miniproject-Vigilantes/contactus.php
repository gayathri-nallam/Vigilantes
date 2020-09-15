<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="contactus.css" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include 'head.php' ;?>
<div class="a">
<h3>Contact Us</h3>

<div class="container">
  <form action="/action_page.php">
    <p>vigilantesdesire@gmail.com<a href="vigilantesdesire@gmail.com"></a> </p>
    <p>9059648959<a href="9059648959"></a> </p>
    <textarea id="subject" name="subject" placeholder="Your Message Is Presious.." ></textarea><br><br>
    <input type="submit" value="Submit">
  </form>
</div>
</div>
    <?php
        include 'footer.php';
        ?>
</body>
</html>
