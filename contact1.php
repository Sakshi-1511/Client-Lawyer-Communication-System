<?php  
$Fullname = filter_input(INPUT_POST, 'fullName');
$email = filter_input(INPUT_POST, 'email');
$phone= filter_input(INPUT_POST, 'phone');


$message = filter_input(INPUT_POST, 'message');

$address = filter_input(INPUT_POST, 'address');


if (!empty($Fullname)) 
{
  if (!empty($email)) 
  {
    if(!empty($phone))
    {
      if (!empty($message))
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
      $sql = "INSERT INTO contact(Name,Email,Phone,Message,Address) values ('$Fullname','$email','$phone',
        '$message','$address')";
      if ($conn->query($sql)) 
      {
      
        echo '<script >alert("You message received :)");window.location="contact.php"</script>';
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
        echo '<script >alert("Message should not be empty."");window.location="contact.php"</script>';
    die();
   }


  }
   

else{
echo '<script >alert( "Address should not be empty.");window.location="contact.php"</script>';
die();}}
else{
echo '<script >alert( "Phone NO should not be empty.");window.location="contact.php"</script>';
die();}}
else{
echo '<script >alert( "Email  should not be empty.");window.location="contact.php"</script>';
die();}}
    else{
        echo '<script >alert( "Name should not be empty.");window.location="contact.php"</script>';
die();}



    



?>