<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
    <head>
        <title>About Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="index.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body background="img/cc.jpg">
       <?php include 'head.php' ;?>
    <center>
        <font color="white" size="70%">
        </font>
        <br>
        <font color="white">
        <h1><u> About Us</U></h1>
        <br><br><br><br>
        <tr>
     <td>Our mission is to help organisation to overcome the communication challenges they face as they expand internationally and grow their global workforce.</td>
    
        </tr>
     <tr>
     <p><td>This project has many features which are generally not available in normal system,so this systems like user facility for user login to communicate.
     </td></p>
     </tr>
    <tr>
    <p><td>It also has a facility of admin login through which the admin can monitor the whole system.It also has facility to communicate directly with the management.
    </td></p>
    </tr>
    <tr>
    <p><td>
        Through this project we can identify the particular meaning of a word and it has a chance to transulate from one to another languages,
                   It displays the part-of-speech of a particular word.
    </td></p>
    </tr>
    <tr>
    <p><td>Here at Communicaid we have been helping organisations for communicate with the institute.the opportunities inherent in working with the competence of the team.
    </td></p>
    </tr>
   <br><br><br><br>
   <br>
   <u><h1>What We Do</h1></u>
           <tr>
               <td>
                   <p>Our talented teams crafts the best<br>
                       code and design amazing user expeiences.<br>
                       we provide users to improve their communicaton skills.<br>
                       we use the transulators to convert into different languages.<br>
                       we are provide this system for all users to develop their communication skills.
                   </p>
               </td>
           </tr>
           <br><br><br>
           <u><h1>Intrested In Finding Out More?</u></h1>
           
           <p>If you’re just browsing, we hope you enjoy your visit. <br>
               If you’d like to learn more or have a specific question <br>
               – we’d love to hear from you. Either way, thanks for visiting Communicaid.</p>
            <a href="contactus.php" >Contact Us</a>
           <br><br><br><br>
           <br><br>
           <u><h1>Sign up for our E-NEWS</h1></u>
           <br>
           Email address:<input type="text" size="25" placeholder="Enter Email"<br><br>
           <br>
           <input type="checkbox" value="Yes please keep me updated with news from Communicaid, a Learnlight company">Yes please keep me updated with news.<br>
           <br>
           <input type="Submit" value="Subscribe">
           <br><br><br>
    <?php
        include 'footer.php';
        ?>
    </body>
</html>
