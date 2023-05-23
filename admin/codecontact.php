<?php
include('security.php');

if(isset($_POST['delete_btn']))
{
    $Email = $_POST['delete_Email'];

    $query = "DELETE FROM enquiry WHERE Email='$Email' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Queries.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Queries.php'); 
    }    
}
?>