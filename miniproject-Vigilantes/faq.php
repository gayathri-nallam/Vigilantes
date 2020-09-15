<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="faq.css" type="text/css"/>
</head>
<body>
    <?php include 'head.php' ;?>
<div class="box">
	<p 	class="heading">FAQ's</p>
	<div class="faqs">
		<details>
			<summary>How do I change my password ?</summary>
			<p class="text">Open your account.<br>You might need to sign in.<br>Under Settings,select security.<br>Choose Password,You might need to sign in.<br>Enter your new password,then select Change Password.</p>
		</details>
		<details>
			<summary>How do I sign up to the website?</summary>
			<p>Go to the website.<br>Click Sign up.<br>Enter your First Name,Last Name,Email,Password.<br>Click signup.</p>
		</details>
		<details>
			<summary>How do I delete my account?</summary>
			<p>Go to the Website.<br>Open your Account.<br> Open Settings.<br>Tap on Delete acount.</p>
		</details>
		<details>
			<summary>How do I change my account settings?</summary>
			<p>On our website.<br>Open your account.<br>Choose setting.<br>Make the changes you want to make.</p>
		</details>
		<details>
			<summary>How do I reset my password?</summary>
			<p>Open the Website.<br>Enter your mail.<br>Press on forgot password.<br>You will get an Rest Password Link to your mail.<br>Click on the link,enter your new password.</p>
		</details>
	</div>
</div>
<?php
        include 'footer.php';
        ?>
</body>
</html>