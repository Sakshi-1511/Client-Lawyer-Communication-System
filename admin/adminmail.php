<?php
$to_email = "patiladitya210102@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: patiladitya210102@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    echo '<script>alert("Mail sent !")</script>';

} else {
    echo "Email sending failed...";
    echo '<script>alert("Mail not sent !")</script>';
}
?>