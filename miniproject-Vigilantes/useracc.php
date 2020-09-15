<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
    <head>
        <title> Account </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="useracc.css" type="text/css">
    </head>   
    <body>
        <?php include 'head.php' ;?>
    <div id="Account-box">
        <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-center">
                        <li><span class="glyphicon glyphicon-user"></span>
        <!--<h1>Account</h1>-->
	<form align="center">
                <label for="first_name"> User Name </label><br>
                <!--<input type="text" placeholder="Enter your First Name"><br><br>-->

                <label for="email_id">Email Id </label><br>
                <!--<input type="email" placeholder="Enter your Email Id"><br><br>-->
                
                <label for="Get_verified">Get Verified </label><br>
	</form>
        <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">        
                <li><a href="profile.php"><span class="glyphicon glyphicon-picture"></span>Profile</a></li>
                    </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                <li><a href="pass.php"><span class="glyphicon glyphicon-cog"></span>Password Settings</a></li>
                    </ul>
        </div>        
	<form align="center">
                <p> Your verification request is currently pending. <a href="">Get Verified</a><br><br>
                <!--<input type="button" value="Update Account">-->
                <button class="update account">Update Account</button>
        </form>
                    </ul>
</div>>        
</div>
<?php
        include 'footer.php';
        ?>
         
    </body>
</html>
