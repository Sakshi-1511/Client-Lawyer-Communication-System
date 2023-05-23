<?php  
$Username = filter_input(INPUT_POST, 'username');
$Email = filter_input(INPUT_POST, 'email');
$Password = filter_input(INPUT_POST, 'password');

if (!empty($Username)) 
{
 
    if(!empty($Email))
    {
      if (!empty($Password)) {

      
      $host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "client&lawyer";
    // connection
    $conn = new mysqli($host,$dbusername,$dbpass,$dbname,'3307');
    if (mysqli_connect_error()) {
      die('Connect Error ('.
        mysqli_connect_errno().')' 
        .mysqli_connect_error());
                          }
      else
          {
      $sql = "INSERT INTO admin(username,email,password) values ('$Username','$Email','$Password')";
      if ($conn->query($sql)) 
      {
        echo '<script >alert("Admin Added successfully.");window.location="Admin-Settings.php"</script>';
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
        echo '<script >alert("Password should not be empty."");window.location="Admin-Settings.php"</script>';
    die();
   }


  }
   else
   {
        echo '<script >alert("Email should not be empty."");window.location="Admin-Settings.php"</script>';
    die();
    }
}

else{
        echo '<script >alert( "Username should not be empty."");window.location="Admin-Settings.php"</script>';
  die();}




?>