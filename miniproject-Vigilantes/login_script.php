<?php

$con = mysqli_connect("localhost", "root", "", "vigilantes")or die($mysqli_error($con));
session_start();

$email_id =filter_input(INPUT_POST, 'email');

$password =  filter_input(INPUT_POST, 'password');
// Query checks if the email and password are present in the database.
$query = "SELECT email_id,password FROM user WHERE email_id=' $email_id ' AND password='$password '";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email_id'];
  $_SESSION['id'] = $row['id'];
  header('location:index.php');
}

