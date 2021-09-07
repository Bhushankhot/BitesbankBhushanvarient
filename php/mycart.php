<?php
session_start();
if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
{
    // echo "Not Logged in";
}
else
{
    // echo "Logged in as".$_SESSION['phone'];
}
?>
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
<?php include("../partials/footer.php") ?>