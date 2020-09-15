<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html><head><META http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="pass.css" type="text/css"/>
    </head><body>
    <?php include 'head.php' ;?>
        
        
       
    <div>
        
        <form align="center" target="_blank" onsubmit="try {return window.confirm(&quot;This form may not function properly due to certain security constraints.\nContinue?&quot;);} catch (e) {return false;}">
                <label> Password: <input type="password"><br><br></label>
                
                
                
                <label> New Password: <input type="Password"><br><br></label>
                               
                <label> Retype New Password:<input type="Password"><br><br> </label>
                
                <input type="button" value="Back">
                <input type="button" value="Submit">
        </form>
            
        </div>
         
    
<?php
        include 'footer.php';
        ?>
</body></html>
