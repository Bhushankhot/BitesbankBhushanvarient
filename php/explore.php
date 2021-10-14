 <?php 
        include("../partials/header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitesBank -Explore</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/explore-page.css"> 
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
</head>

<body>


    <!-- CAtegories Section Starts Here -->
    <section class="categories">
         <div class="container">
            <h2 class="text-center">Explore Foods</h2>

     <?php
            define('SITEURL','https://localhost/BitesBank/');
            define('LOCALHOST', 'localhost');
            define('DB_USERNAME','root');
            define('DB_PASSWORD', '');
            define('DB_NAME','bitesbank');

            $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error());

            $db_select= mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

            $sql= "SELECT * FROM category WHERE featured='Yes' and active='Yes'";
            $res= mysqli_query($conn, $sql);
            $count= mysqli_num_rows($res);

        
                if($count>0)
                {       
                    $sn=1;
                     while($rows=mysqli_fetch_assoc($res))
                    {
                        $id=$rows['id'];
                        $title= $rows['title'];
                        $img_name=$rows['img_name'];
                        ?>
                       

                            <a href="category-foods.php">
                            <div class="box-3 float-container">
                                <img src="<?php echo SITEURL;?>images/category/<?php echo $img_name;?>" alt="Pizza" style="height:400px;"class="img-responsive img-curve">

                                <h3 class="float-text text-white " style="text-align: center;"><?php echo $title; ?></h3>
                            </div>
                            </a>
                        <?php


                    }
                }
                else
                {
                     echo "<div class='error'>Category not found</div>";
                }
                        ?>


            <!-- <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/menu-burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/menu-burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/menu-burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/menu-burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/explore/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a> -->

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center" style=" background-color: black; width: 98%;">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>


</body>
</html>



























<?php include("../partials/footer.php"); ?>