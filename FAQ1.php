<?php  
$Name = filter_input(INPUT_POST, 'name');
$Phone = filter_input(INPUT_POST, 'phone');
$Question = filter_input(INPUT_POST, 'question');

if (!empty($Name)) 
{
  if (!empty($Phone)) 
  {
    if(!empty($Question))
    {
      $host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "client&lawyer";
    // connection
    $conn = new mysqli($host,$dbusername,$dbpass,$dbname);
    if (mysqli_connect_error()) {
      die('Connect Error ('.
        mysqli_connect_errno().')' 
        .mysqli_connect_error());
                          }
      else
          {
      $sql = "INSERT INTO Faq(Name,Phone,Question) values ('$Name','$Phone','$Question')";
      if ($conn->query($sql)) 
      {
        echo '<script >alert("Your question received successfully. Soon we will contact you :)");window.location="FAQ.php"</script>';
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
        echo '<script >alert("Question should not be empty."");window.location="FAQ.php"</script>';
    die();
   }


  }
   else
   {
        echo '<script >alert("Phone should not be empty."");window.location="FAQ.php"</script>';
    die();
    }
}
else{
        echo '<script >alert( "Name should not be empty."");window.location="FAQ.php"</script>';
  die();

}




?>