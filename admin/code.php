<?php
include('security.php');

if(isset($_POST['delete_btn']))
{
    $Phone = $_POST['delete_Phone'];

    $query = "DELETE FROM signup WHERE Phone='$Phone' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Job-Applications.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Job-Applications.php'); 
    }    
}
?>