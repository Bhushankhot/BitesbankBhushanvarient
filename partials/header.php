<!-- Navbar Section Starts Here -->
<section class="navbar-s">
        <div class="container-1">
            <div class="logo-s">
            <a href="../php/index.php" title="Logo">
                    <img src="../images/templogo.jpg" alt="Restaurant Logo" class="img-logo">
            </a>
            </div>    
            <div class='logo-txt respon-nav'>
<<<<<<< HEAD
                <h1 id='logo-txt-real'>BitesBank</h1>
            </div>
            <div class="log-btn respon-nav">
            <?php if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
=======
                <li id="logolink"><a href="../php/index.php" style="font-size: 1.75rem;color: white;ffont-weight: bold;font-family:none;margin-left:0">BitesBank</a></li>
                <!-- <h1 id='logo-txt-real'>BitesBank</h1> -->
            </div>

            <div class="menu text-center respon-nav">
                <ul>
                    <div class="log-btn respon-nav">
                <?php if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
>>>>>>> 6b10f7c (Added admin)
                    {    
                        echo '<a href="../php/login.php">Login';
                    }
                  else
                    {
                        echo '<a href="../php/mycart.php">My Cart';
                    }
            ?>
            </a></div>
<<<<<<< HEAD
            <div class="menu text-center respon-nav">
                <ul>
                    <li>
                        <a href="../php/index.php">Explore</a>
=======
                     <li>
                        <a href="../php/index.php">Home</a>
                    </li>
                    <li>
                        <a href="../php/explore.php">Explore</a>
>>>>>>> 6b10f7c (Added admin)
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

