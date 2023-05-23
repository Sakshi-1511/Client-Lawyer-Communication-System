<?php  
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$phone= filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'pass');
$gender = filter_input(INPUT_POST, 'gender');
$address = filter_input(INPUT_POST, 'address');


if (!empty($fname)) 
{
 if (!empty($lname)) 
{
  if (!empty($email)) 
  {
    if(!empty($phone))
    {
      if (!empty($password))
       {
       
           if(!empty($gender))
        {
          
           
                  if(!empty($address))
                  {


      
      $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "client&lawyer";
    // connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()) {
      die('Connect Error ('.
        mysqli_connect_errno().')' 
        .mysqli_connect_error());
                          }
      else
          {
      $sql = "INSERT INTO clientsignup(Fname,Lname,Email,Phone,Password,Gender,Address) values ('$fname','$lname','$email','$phone',
        '$password','$gender','$address')";
      if ($conn->query($sql)) 
      {
      
        echo '<script >alert("You are scuccessfully registered");window.location="client_login.php"</script>';
      }
      else
      {
        echo "Error: ". $sql . "<br>" 
        .$conn->error;
      }
      $conn->close();

          }

    }
     else
   {
        echo '<script >alert("Address should not be empty."");window.location="client_register.php"</script>';
    die();
   }}
  else{
    echo '<script >alert( "Gender should not be empty.");window.location="client_register.php"</script>';
die();}}

else{
echo '<script >alert( "Password  should not be empty.");window.location="client_register.php"</script>';
die();}}
else{
echo '<script >alert( "Phone NO should not be empty.");window.location="client_register.php"</script>';
die();}}
else{
echo '<script >alert( "Email NO should not be empty.");window.location="client_register.php"</script>';
die();}}
else{
    echo '<script >alert( "Last name should not be empty.");window.location="client_register.php"</script>';
    die();}}
    else{

        echo '<script >alert( "First Name should not be empty.");window.location="client_register.php"</script>';
  die();}



    



?>