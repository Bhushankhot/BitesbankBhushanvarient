<?php

    session_start();

    define('SITEURL','https://localhost/BitesBank/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD', '');
    define('DB_NAME','bitesbank');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error());

    $db_select= mysqli_select_db($conn,DB_NAME) or die(mysqli_error());








?>