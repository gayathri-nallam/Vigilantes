<?php

require("common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$first_name =mysqli_real_escape_string($con,filter_input(INPUT_POST, 'first name'));
  

$last_name = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'last name'));
  
$email_id = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));

$password = MD5(mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password')));

  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM user WHERE email_id='$email_id'";
  $result = mysqli_query($con, $query)or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email_id)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else {
    
    $query = "INSERT INTO user(first_name,last_name, email_id, password)VALUES(' $first_name ',' $last_name' ,' $email_id',' $password ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['email'] = $email_id;
    $_SESSION['id'] = $id;
    header('location:index.php');
  }
?>


