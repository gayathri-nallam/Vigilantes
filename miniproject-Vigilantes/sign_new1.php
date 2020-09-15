<?php

require("common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$first_name=filter_input(INPUT_POST, 'firstname');
  

$last_name = filter_input(INPUT_POST, 'lastname');
  
$email_id = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));

$password = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));


$query = "INSERT INTO user(first_name,last_name, email_id, password)VALUES(' $first_name ',' $last_name' ,' $email_id',' $password ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    echo "User inserted";