<?php

session_start();
/*
With PHP input field that exists in the form, will exist so you don't need to have isset for each element.
If you want to check if the fields have inputs in them, check to see if the length is greater than 0.
*/

  $errors = array();

  if($_POST['email'] != null) {
    if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
      $errors[] ="This email is not valid";


  } else {
    $errors[] = "Email should not be empty'";
  }

  if( $_POST['first_name'] != null) {
  } else {
    $errors[] = "First name should not be empty'";
  }

  if( $_POST['last_name'] != null) {
  } else {
    $errors[] = "Last name should not be empty'";
  }

  if($_POST['password'] != null) {
  } else {
    $errors[] = "Password should not be empty'";
  }

  if($_POST['confirmpassword'] != null) {
  } else {
    $errors[] = "Confirmation password should not be empty'";
  }

  if($_POST['birthdate'] != null) {
  } else {
    $errors[] = "Birthday should not be empty'";
  }

  // If you want to check for a file - you can use $_FILE

  if(! empty($errors)) {
    $_SESSION['errors'] =  $errors;
    header('Location: index.php');
  }

echo 'you are logged in';


 ?>
