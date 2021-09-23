<?php


    include('../config/constants.php');
    
    if(isset($_GET['id'] )AND isset($_GET['img_name']))
    {
        $id=$_GET['id'];
        $img_name=$_GET['img_name'];


        if($img_name!= "")
        {
            $path="../images/category/".$img_name;
            $remove= unlink($path);


            if($remove==False)
            {
                $_SESSION['remove']= "<div class='error'>Failed to delete Category Image.</div> ";
                header("Location:".SITEURL.'admin/manage-catogories.php');
                die();
            }
        }

        $sql= "DELETE FROM category WHERE id=$id";

        $res=mysqli_query($conn,$sql);
        if($res==True)
        {
        //echo "Admin Deleted";
        $_SESSION['delete2']= "<div class='success'>Category deleted successfully.</div>";
        header("Location:".SITEURL.'admin/manage-catogories.php');
        }
        else
        {
        $_SESSION['delete2']= "<div class='error'>Failed to delete Category.</div> ";
        header("Location:".SITEURL.'admin/manage-catogories.php');
       // echo "Failed to delete Admin";
        }
    }
    else
    {
        header("Location:".SITEURL.'admin/manage-catogories.php');
    }
    
   /* $id=$_GET['id'];

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
    */


