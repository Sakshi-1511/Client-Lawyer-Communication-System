<?php  

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


    if(!empty($email))
    {
      if (!empty($password)) {

      
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
      $sql = "DELETE FROM admin
WHERE email='$email'
AND password='$password';";
      
      if ($conn->query($sql)) 
      {
        echo '<script >alert("Admin deleted successfully.");window.location="Admin-Settings.php"</script>';
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
   

else{
        echo '<script >alert( "Email should not be empty."");window.location="Admin-Settings.php"</script>';
  die();}




?>