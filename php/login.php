<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RajuHalwai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
</head>
<body>
<?php include("../partials/header.php") ?>

<div class="form-s">
    <div class="text-center container-2">
        Dont have an account yet?
        <a href='signup.php'><button class="mt btn btn-primary">Click here to Register</button></a>
<<<<<<< HEAD
=======
        <h3>Or</h3>
        Sign in as admin
        <a href="../admin/adminindex.php"><button class="mt btn btn-primary">Admin login</button></a>
>>>>>>> 6b10f7c (Added admin)
    </div>
    <div id="log-form">
        <form action='login.php' class=" bootstrap-iso" method="POST">
            <div class="mb mt">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp">
                <div id="phoneHelp" class="form-text">We'll never share your details with anyone else.</div>
            </div>
            <div class="mb mt">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mt form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button id="subm-btn" type="submit" class="mb btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $phone = $_POST["phone"];
        $pass = $_POST["password"];
        $server = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($server,$username,$password);
        if(!$conn)
            {
                echo "Connection to Database Failed";
                echo "<br>";
            }
        mysqli_query($conn,"use bitesbank;");
        $query = "select * from login";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        for($i=0;$i<$num;$i++)
        {
            $row = mysqli_fetch_assoc($result);
            if($phone==$row["phnum"])
            {
                if($pass==$row['pass'])
                {
                    echo "Logged IN";
                    session_start();
                    $_SESSION['logstat']=true;
                    $_SESSION['phone']=$phone;
                    $_SESSION['login']=1;
                    header("location: index.php");
                }
                else{
                    echo "Wrong Password";
                }
                break;
            }
            if($i==$num-1)
            {
                echo "Phone Number Not Registered";
            }
        }
    }
?>
<?php include("../partials/footer.php") ?>