<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>


<html lang="en">
<head>
      <Meta charset="utf-8">
      <title>Terms and conditions</title>
      
<style>
"{margin: 0;padding:0;}
body{font-size:10px;}

.heading{color: black; position: absolute;top:5%;width:100%;text-align:center;font-size:3rem}
</style>
</head>
<body>
    
<div class="container">
<div class="row">
<div class="banner">
<img src="img/applegreen.jpg" width="1350" height="150" alt="no image">
<h1 class="heading">Terms And Conditions</h1>
</div>
</div>
</div>
<h3>These Terms and Conditions governs the use of the services that are made available by vigilantes.com. These Terms and Conditions represent the whole agreement and understanding between vigilantes.com and the individual or entity who subscribes to our service.</h3>

<h3>PLEASE READ THIS AGREEMENT CAREFULLY. By submitting your application and by your use of the Service, you agree to comply with all of the terms and conditions set out in this Agreement.vegilanates.com may terminate your account at any time, with or without notice, for conduct that is in breach of this Agreement, for conduct that vegilanates.com believes is harmful to its business, or for conduct where the use of the Service is harmful to any other party.</h3>

<h3>vigilantes.com may, in its sole discretion, change or modify this Agreement at any time, with or without notice. Such changes or modifications shall be made effective for all Subscribers upon posting of the modified Agreement to this web address (URL): http://www.vigilantes.com/terms-and-conditions/. You are responsible to read this document from time to time to ensure that your use of the Service remains in compliance with this Agreement.</h3>
<h3>Other than the content you own, under these Terms, communication skills and/or its licensors own all the intellectual property rights and materials contained in this Website.</h3>

<h3>You are granted limited license only for purposes of viewing the material contained on this Website.</h3>
<p>You are specifically restricted from all of the following:</p>

<ul>
    <li>publishing any Website material in any other media;</li>
    <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
    <li>publicly performing and/or showing any Website material;</li>
    <li>using this Website in any way that is or may be damaging to this Website;</li>
    <li>using this Website in any way that impacts user access to this Website;</li>
    <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
    <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
    <li>using this Website to engage in any advertising or marketing.</li>
</ul>
<?php
        include 'footer.php';
        ?>
</body>
</html>