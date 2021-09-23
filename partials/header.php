<!-- Navbar Section Starts Here -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitesBank - Help</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
    
    <script src="../js/index.js"></script>
</head> 

<section class="navbar-s">
        <div class="container-1">
            <div class="logo-s">
            <a href="../php/index.php" title="Logo">
                    <img src="../images/templogo.jpg" alt="Restaurant Logo" class="img-logo">
            </a>
            </div>    
            <div class='logo-txt respon-nav'>
                 <a href="../php/index.php" >
                    <h1 id='logo-txt-real' href='../php/index.php'>BitesBank</h1>
                </a>
            </div>
            <!-- <div class="log-btn respon-nav">
            <?php if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
                    {    
                        echo '<a href="../php/login.php">Login';
                    }
                  else
                    {
                        echo '<a href="../php/mycart.php">My Cart';
                    }
            ?>
            </a></div> -->
            <div class="menu text-center respon-nav">
                <ul>

                    <li>
                        <?php if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
                    {    
                        echo '<a href="../php/login.php">Login';
                    }
                  else
                    {
                        echo '<a href="../php/mycart.php">My Cart';
                    }
            ?>
                        
                </li>
                    <li>
                        <a href="../php/explore.php">Explore</a>
                    </li>
                    <li>
                        <a href="#">Your Account</a>
                        <ul> 
                        <?php
                            if(!isset($_SESSION['logstat']))
                                echo '<li class="dd-menu"><a href="../php/login.php">Profile</a></li>';
                            else
                                echo '<li class="dd-menu"><a href="../php/profile.php">Profile</a></li>';
                            if(isset($_SESSION['logstat']))
                                echo '<li class="dd-menu"><a href="../php/logout.php">Logout</a></li>';
                        ?>
                        </ul>
                    </li>
                    <li>
                    <?php
                        if(isset($_SESSION['logstat']))
                            echo '<a href="../php/support.php">Help & Support</a>';
                        else
                            echo '<a href="../php/login.php">Help & Support</a>';
                    ?>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

