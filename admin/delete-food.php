<?php


    include('../config/constants.php');
    
    if(isset($_GET['id'] ) && isset($_GET['image_name']))
    {

        $id=$_GET['id'];
        $image_name=$_GET['image_name'];


        if($image_name!= "")
        {
            $path="../images/food/".$image_name;
            $remove= unlink($path);


            if($remove==False)
            {
                $_SESSION['upload']= "<div class='error'>Failed to delete Category Image.</div> ";
                header("Location:".SITEURL.'admin/manage-food.php');
                die();
            }
        }
        $sql= "DELETE FROM food WHERE id=$id";

        $res=mysqli_query($conn,$sql);
        if($res==True)
        {
        //echo "Admin Deleted";
            $_SESSION['delete']= "<div class='success'>Category deleted successfully.</div>";
            header("Location:".SITEURL.'admin/manage-food.php');
        }
        else
        {
            $_SESSION['delete']= "<div class='error'>Failed to delete Category.</div> ";
            header("Location:".SITEURL.'admin/manage-food.php');
       // echo "Failed to delete Admin";
        }
    }
    else
    {
         header("Location:".SITEURL.'admin/manage-food.php');
    }