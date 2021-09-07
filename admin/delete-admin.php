<?php


    include('../config/constants.php');

    $id=$_GET['id'];

    $sql= "DELETE FROM adminb WHERE id=$id";

    $res=mysqli_query($conn,$sql);


    if($res==True)
    {
        //echo "Admin Deleted";
        $_SESSION['delete']= "<div class='success'>Admin deleted successfully.</div>";
        header("Location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='error'>Failed to delete admin.</div> ";
        header("Location:".SITEURL.'admin/manage-admin.php');
       // echo "Failed to delete Admin";
    }
    





?>