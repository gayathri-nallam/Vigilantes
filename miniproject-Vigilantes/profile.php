<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
<head>

	<title>PROFILE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="profile.css" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include 'head.php' ;?>
<center>
<h1> Image </h1>
<table>
	<img style="margin-left:25px;" src="upload2/avatar.png" width="200" height="200" />
	<tr><td><input type="file" name="image" ></td></tr>
	<tr><td><input name="Submit" type="submit" value="Upload image"></td></tr>
</table>

<table>
	<h1>Basic info</color></h1>
		<tr>
			<td><label for="first name" >FIRST NAME</label></td>
			<td><input type="text" name="fisrt name"></td>
		</tr>
		<tr>
			<td><label for="last name">LAST NAME</label></td>
			<td><input type="text" name="last name" ></td>
		</tr>
		<tr>
			<td><label for="dob">Date Of Birth</label></td>
			<td><input type="date"></td>
		</tr>
		<tr>
			<td><label for="NUMBER">Phone Number </label></td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td><label for="MAIL.ID">EMAIL</label> </td>
			<td><input type="text" name="mail"></textarea></td>
		</tr>
</table>

<h1>About me</h1>
	<p>
		<div>  <textarea rows="5",colums="500" style="width:40%;"></textarea>  </div>
	</p>

	
<h1 style="font-size: 200%">Social Media</h1> 
	<p><label for="Facebook">Facebook URL:</label>
		<a href="https://www.facebook.com" target="_blank" > Facebook</a>
		<div> <input type="text"  </div> </p>
	<p><label for="Twitter">Twitter URl: </label>
		<a href="https://www.twitter.com" target="_blank" > Twitter </a>
		<div> <input type="text" </div> </p>
	<p><label for="LinkedIn">LinkedIn URL</label>
		<a href="https://www.linkedin.com" target="_blank" > Linkedin </a>
		<div> <input type="text"  </div> </p>
	<p><label for="google+">Google+ URL</label>
		<a href="https://plus.google.com" target="_blank" > Google </a>
		<div> <input type="text">  </div> </p>
		
<button class="submit">Submit</button>
<button class="edit"> Edit </button>

</center>				

</fieldset>
<?php
        include 'footer.php';
        ?>
</body>
</html>