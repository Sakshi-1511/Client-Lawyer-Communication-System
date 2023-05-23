<?php
include('security.php');

if(isset($_POST['delete_btn']))
{
    $Name = $_POST['delete_Name'];

    $query = "DELETE FROM Faq WHERE Name='$Name' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Questions.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Questions.php'); 
    }    
}
?>