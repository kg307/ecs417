

<?php
require 'dbh.inc.php';
session_start();

//$con = mysqli_connect("10.129.17.32", "user", "password");

//mysqli_select_db($con, ecs417);

$email = $_POST["email"];
$password = $_POST["password"];


$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

$s = " select * from logindetails where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s); //returns all rows that contain the requested email and password
//(should be 1 if the login details are correct)

$validation = mysqli_num_rows($result); //checks how many login details in the database match the input
//should be only 1 if correct details entered


if($validation ==1){
  header("location: addPost.html");
  $_SESSION["loggedin"] = true;
}
else{
  header("location: index.php");
  $error = "Your Login Name or Password is invalid";
}

?>
