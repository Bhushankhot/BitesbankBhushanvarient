<?php 
include('../config/constants.php')
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitesBank</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adminstyle.css">
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
</head>
<body>
<?php include("../partials/header.php") ?>
<?php
     if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

    if(isset($_SESSION['no-login-msg']))
            {
                echo $_SESSION['no-login-msg'];
                unset($_SESSION['no-login-msg']);
            }
?>

            <br>
            <br>
            <br>
            <br>
            <br>
    <div class="form-s" style="padding-top: 5%;padding-bottom: 5%;border:11px groove red;padding-left:3% ;padding-right:3%">
    <div id="log-form">
        <form action='' class=" bootstrap-iso text-center" method="POST">
            <div class="mb mt" style="text-align:center;">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="phone"style="width:40%; text-align:center; margin-left:30%" >
            </div>
            <div class="mb mt" style="text-align:center;">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" style="width:40%; text-align:center; margin-left:30%">
            </div>
            <input type ="submit" name="submit" value= "login" class="btn-primary" style="width:20%; text-align:center; ;">
        </form>
    </div>
</div>
        </div>




<?php
//Check whether the Submit Button is Clicked or Not
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM adminb WHERE username='$username' AND password='$password'";
            $res = mysqli_query($conn, $sql);

            $res= mysqli_query($conn, $sql);
            $count= mysqli_num_rows($res);
            if($count==1)
            {
                $_SESSION['login']= "<div class='success'>Login Successfull.</div>";
                $_SESSION['user']= $username;
                header("Location:".SITEURL.'admin/adminindex.php');
                // alerts('Success ! You have been logged in.');
            }
            else
            {
                $_SESSION['login']= "<div class='error text-center'>Username and password did not match.</div>";
                header("Location:".SITEURL.'admin/login-admin.php');
            }
        }




?>