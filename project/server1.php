<?php

session_start();

// initializing variables
//$username = "";
//$email    = "";
//$address    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "", "project");
//if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //exit();
//}


 
// REGISTER USER
/*
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }
  //if (empty($email)) { array_push($errors, "Email is required"); }
  //if (empty($password_1)) { array_push($errors, "Password is required"); }
  //if ($password_1 != $password_2) {
    //array_push($errors, "The two passwords do not match");
  //}


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      //array_push($errors, "Username already exists");

    }

    if ($user['email'] === $email) {
      //array_push($errors, "Email already exists");

    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $stmt = $db->prepare("INSERT INTO users (username, email, address, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $email, $address, $password);
    $stmt->execute();
  

  	$query = "INSERT INTO users (username,email,address,password) 
  			  VALUES('$username', '$email','$address' ,'$password')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: Homepage.php');
    
  }
}
*/
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($email)) {
  	array_push($errors, "Email Id is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
  	$password = md5($password);
    /*
  	$query = "SELECT * FROM users WHERE username='$username' AND email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
    */
    $stmt = $db->prepare("SELECT * FROM users WHERE username=? AND email=? AND password=?");
    $stmt->bind_param("ssi", $username, $email, $password);
    $stmt->execute();
    $results = $stmt->get_result();
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['success'] = "You are now logged in";
      //echo "<script> window.location.href = 'homepage.php'; </script>";
  	  header("location: shoppingcart/index.php");
      exit();
  	}
    else {
  		array_push($errors, "Wrong combination");
      
  	}
  }
}

?>