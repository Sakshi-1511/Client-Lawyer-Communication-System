<?php
include('security.php');

if(isset($_POST['delete_btn']))
{
    $email = $_POST['delete_Email'];

    $query = "DELETE FROM booking WHERE Email='$email' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Internship-Applications.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Internship-Applications.php'); 
    }    
}
?>