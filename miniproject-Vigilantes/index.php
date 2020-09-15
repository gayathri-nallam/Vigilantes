<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vigilantes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="index.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                  
                </div>
      <div class="collapse navbar-collapse" id="myNavbar">
                  <div> 
          <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span>About us</a></li>
<li><a href="useracc.php"><span class="glyphicon glyphicon-dashboard"></span>User account</a></li>
<li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>settings</a></li>
<li><a href="terms&cond.php"><span class="glyphicon glyphicon-folder-close"></span>Terms & conditions</a></li>
<li><a href="help.php"><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
</div>
          
            
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        
                    </ul>
                </div>
                </div>
          </nav>
      <div>
                    <h1>VIGILANTES</h1>
                    <h2>You Make Your Own Rules</h2>
                    </div>
      <div>
          
               <center>
                
                    <form method="get" action="dictionary.php">
            <button class="btn"><h3>DICTIONARY & TRANSLATOR</h3></button>
            </form>
                
                </center>
            
</div>          
<div class= container>
                    <div id=banner_image>
               <center>
                <div id=banner_content>
                    <h2> WE SPREAD COMMUNICATION</h2>
                    <p>Communicating effectively is the single most important soft skills one must possess today.the main intent is to convey messages to other people clearly and unambiguously.Communication is also about receiving information that other people send.</p> 
                 </div>
                </center>
            </div>
        </div>
</div>          

<div class="row">
                    <div class="col-md-3 col-sm-6">
                         <a href="publicspeaking.php" ><div class= "thumbnail">
                         <img src="img/public speaker.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Public Speaking</b></h3>
                                <p>Be the best speaker!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
			<div class="col-md-3 col-sm-6">
                         <a href="gd.php" ><div class= "thumbnail">
                         <img src="img/group discussion (1).jpeg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Group Discussion</b></h3>
                                <p>There Can Be Only One Winner!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="Interview.php" ><div class= "thumbnail">
                         <img src="img/interview iMage.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Interview</b></h3>
                                <p>Grab The Best Offer!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
</div>



<div class="row">
                    <div class="col-md-3 col-sm-6">
                         <a href="improvecomm.php" ><div class= "thumbnail">
                         <img src="img/improve.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Improve Communications</b></h3>
                                <p>Prove Yourself</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="letter.php" ><div class= "thumbnail">
                         <img src="img/letter writing image.jpg" alt="Responsive image" height="200" width="250" > 
                            <div class="caption">
                                <h3><b>Letter Writing</b></h3>
                                <p>To Write Is Human, To Receive A Letter is Divine </p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="mail.php" ><div class= "thumbnail">
                         <img src="img/mail writing image.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Email Writing</b></h3>
                                <p>Live Like A Professional!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
</div>

	

<div class="row">
                    <div class="col-md-3 col-sm-6">
                         <a href="debate.php" ><div class= "thumbnail">
                         <img src="img/debate image.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Debate</b></h3>
                                <p>Don't Rise Your Voice, Improve Your Argument!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="openmic.php" ><div class= "thumbnail">
                         <img src="img/open mic.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Open Mic</b></h3>
                                <p>Never Listen When You Eager To Speak!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="talkingphone.php" ><div class= "thumbnail">
                         <img src="img/talking on phone.jpeg" alt="Responsive image" height="200" width="250" > 
                            <div class="caption">
                                <h3><b>Talking on phone</b></h3>
                                <p>Be Awear Only Call!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
</div>



<div class="row">
                    <div class="col-md-3 col-sm-6">
                         <a href="talkingprof.php" ><div class= "thumbnail">
                         <img src="img/talking to professionals.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Talking to professionals</b></h3>
                                <p>Be A Professional!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="talkingStrangers.php" ><div class= "thumbnail">
                         <img src="img/talking to strangers.jpg" alt="Responsive image" height="200" width="250" > 
                            <div class="caption">
                                <h3><b>Talking to Strangers</b></h3>
                                <p>Good To Talk!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					<div class="col-md-3 col-sm-6">
                         <a href="business.php" ><div class= "thumbnail">
                         <img src="img/business communications.jpg" alt="Responsive image" height="200" width="250" > 
                            <div class="caption">
                                <h3><b>Business communications</b></h3>
                                <p>The Art Of Communication Is The Language Of Leadership!</p>
                                <input type="Start learning" value="Start Learning" class="btn btn-primary btn-block">
                            </div>
                         </div> 
                    </div>
					
</div>
<div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="presentation.php" ><div class= "thumbnail">
                         <img src="img/presentation image.jpg" alt="Responsive image" height="200" width="250"> 
                            <div class="caption">
                                <h3><b>Presentation </b></h3>
                                <p>Simplicity Matters!</p>
                                 
                                <input  type="Start learning" value="Start Learning"class="btn btn-primary btn-block" >
                          
                            </div>
                         </div> 
                    </div>
</div>

        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>