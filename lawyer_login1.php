<?php
session_start();

// initializing variables
$enrollno = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '' , 'client&lawyer');



// LOGIN USER
if (isset($_POST['submit'])) {
  $enrollno = mysqli_real_escape_string($db, $_POST['enrollno']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($username)) {
    array_push($errors, "Enrollment NO. is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  $sql="SELECT * from signup WHERE Enrollno = '$enrollno' AND Password ='$password'";
  $que = mysqli_query($db,$sql);
  if(mysqli_num_rows($que)>0)
  {
    echo "<script >alert('login ok')</script>";
    echo "<script >window.open('lawyer_hp.html')</script>";

  }
  else
  {
     echo "<script >alert('login denied')</script>";
  }

}

?>