<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html> 
		<head> 
			<title> SETTINGS </title> 
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
			<style> 
				body{
					background:  linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/lappy.jpg) 50% 50% no-repeat;
                                        margin:0;
                                        padding:0;
                                        font-size: 16px;
                                        font-weight: 300;
                                        width: 100%;
                                        height: 100vh;
                                        font-family: sans-serif;
                                        background-size: cover;
                                        background-position: center;
				 } 
				h1{ 
					text-align:center; 
					color:white; 
                                        margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
    font-family: Source Sans Pro;
				}
				 h2{ 
					text-align:center;
					 color:white;
                                         margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 20px;
    font-family: Source Sans Pro;
				 }
				 p{
					 text-align:center;
					 color:white;
				 }
				 form{
					 text-align:center; 
					text-size:15px; 
					color:white;
 					cursor:pointer; 
				}
			 </style>
 		</head>
		 <body>
                     <?php include 'head.php' ;?>
			 <h1> SETTINGS </h1>
			 <h2> SITE INFORMATION </h2>
                         <p> Website Name: www.vigilantes.com <a href="www.vigilantes.com"></a> </p>
                         <p> Email : vigilantesdesire@gmail.com<a href="vigilantesdesire@gmail.com"></a> </p>
			 <p> Slogon : Your team makes your own rules </p>
			 <form action="gopika"> 
				<tr> 
					<td>Feedback : </td>
					 <td> 
						<textarea name="feedback" rows="5" cols="70"> </textarea> 
					</td> 
				</tr><br/><br/>
					<input type="button" value="DONE"/> 
			</form>
                         <?php
        include 'footer.php';
        ?>
		 </body>
	 </html>