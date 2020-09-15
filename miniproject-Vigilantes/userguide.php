<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
<head>
    <title>User Guide</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="userguide.css" type="text/css"/>
</head>
<body>
    <?php include 'head.php' ;?>
        <h1>User Guide information</h1>
<p>In this website users can find the meaning of word and translate the word from one language to required language.
The user can also be improve the communiction skills through the available courses</p>
<h3>LOGIN PAGE:</h3>
<p>In the login page,the user enters an id and password or other identifying information into the form,
and the server sets a session cookie to say that user has been authenticated,
and can then visit the restricted pages</p>
<h3>SIGNUP PAGE:</h3>
<p>If the user already exists then directly click on LOGIN page otherwise click on SIGNUP page 
and given the required details(Name,EmailId,phone number etc) and then click on signup button.
The given information about the user can be saved and creates an account for the web site.Then the user can visit the restricted pages in webside</p>
<?php
        include 'footer.php';
        ?>
</body>
</html>
