<?php

require("common.php");
$email_id = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));

$password = (mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password')));
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  
  
$query = "SELECT id, email_id FROM student WHERE email_id='$email_id ' AND password=' $password '";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    
    header('location:login.php?error=' . $m);
  } else if (!preg_match($regex_email, $email_id)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    
    header('location:login.php?error=' . $m);
  } else {

   $query = "INSERT INTO student( email_id, password)VALUES(' $email_id',' $password ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['email'] = $email_id;
    $_SESSION['id'] = $id;
    header('location:index.php');
  }