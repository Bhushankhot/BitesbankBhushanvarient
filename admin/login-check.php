<?php


    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-msg']= "<div class='error text-center'>Please login to access Admin Panel</div>";
        header("Location:".SITEURL.'admin/login-admin.php');
    }





?>
