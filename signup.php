<?php  
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone= filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'pass');
$enrollno= filter_input(INPUT_POST, 'enrollno');
$gender = filter_input(INPUT_POST, 'gender');

$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$pincode = filter_input(INPUT_POST, 'pincode');
$address = filter_input(INPUT_POST, 'address');


if (!empty($name)) 
{
  if (!empty($email)) 
  {
    if(!empty($phone))
    {
      if (!empty($password))
       {
        if(!empty($enrollno))
        {
           if(!empty($gender))
        {
          
            if(!empty($city))
            {
              if(!empty($state))
              {
                if(!empty($pincode))
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
      $sql = "INSERT INTO signup(Name,Email,Phone,Password,Enrollno,Gender,City,State,Pincode,Address) values ('$name','$email','$phone',
        '$password','$enrollno','$gender','$city','$state','$pincode','$address')";
      if ($conn->query($sql)) 
      {
      
        echo '<script >alert("You are successfully registered");window.location="lawyer_login.php"</script>';
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
        echo '<script >alert("Address should not be empty."");window.location="register.php"</script>';
    die();
   }


  }
   else
   {
        echo '<script >alert("Pincode should not be empty.");window.location="register.php"</script>';
    die();
    }
}
else{
        echo '<script >alert( "State should not be empty.");window.location="register.php"</script>';
  die();

}}
else{
        echo '<script >alert( "City should not be empty.");window.location="register.php"</script>';
  die();}}
 
  else{
    echo '<script >alert( "Gender should not be empty.");window.location="register.php"</script>';
die();}}
else{
  echo '<script >alert( "Enroll NO should not be empty.");window.location="register.php"</script>';
die();}}
else{
echo '<script >alert( "Password should not be empty.");window.location="register.php"</script>';
die();}}
else{
echo '<script >alert( "Phone NO should not be empty.");window.location="register.php"</script>';
die();}}
else{
echo '<script >alert( "Email  should not be empty.");window.location="register.php"</script>';
die();}}
    else{
        echo '<script >alert( "Name should not be empty.");window.location="register.php"</script>';
die();}



    



?>