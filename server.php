<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$message = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'newsletter');

// REGISTER USER
if (isset($_POST['subscribe'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }   

  $query = "INSERT INTO users (email, name) 
  			  VALUES('$email', '$name')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You have been subscribed";
  	$message = "You have been subscribed";
  	echo "<script type='text/javascript'>alert('$message');</script>";
  }
?>
