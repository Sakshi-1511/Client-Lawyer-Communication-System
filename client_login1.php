<?php
session_start();

// initializing variables
$phone = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '' , 'client&lawyer');



// LOGIN USER
if (isset($_POST['submit'])) {
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($username)) {
    array_push($errors, "Phone NO. is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  $sql="SELECT * from clientsignup WHERE Phone = '$phone' AND Password ='$password'";
  $que = mysqli_query($db,$sql);
  if(mysqli_num_rows($que)>0)
  {
    echo "<script >alert('login ok')</script>";
    echo "<script >window.open('law_card.php')</script>";

  }
  else
  {
     echo "<script >alert('login denied')</script>";
  }

}

?>