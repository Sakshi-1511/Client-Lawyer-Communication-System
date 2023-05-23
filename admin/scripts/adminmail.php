<?php 
$to_email =  $_POST['email'];
$subject = $_POST['name'];
$body = $_POST['message'];
$headers = "From: patiladitya210102@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {

    echo '<script>alert("Mail sent !")</script>';

} else {
   
    echo '<script>alert("Mail not sent !")</script>';
}
?>