<?php
    require('../partials/basefunc.php');
    sesh_start_index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitesBank - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
    <script src="../js/index.js"></script>
</head>
<body>

<?php 
    include("../partials/header.php");
    if(isset($_SESSION['login']) && $_SESSION['login']==1)
            {   
                $_SESSION['login']=0;
                alertS('Success ! You have been logged in.');
            }
            if(isset($alrt) && $alrt==1)
            {   
                alertF('You have logged out successfully.');
            }
?>

<!-- Centre Search Bar -->

    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for your Favourite Restaurant" required>
                <input type="submit" src='../images/search-icon.png' name="submit" value='Find' class="btn btn-primary">
            </form>

        </div>
    </section>

<!-- Centre Search Bar -->
    
<!-- Partner Resto Section -->

    <section class='categories'>
        
        <h2 class="text-center">Our Top Partnered Restaurants</h2>
        <div class="partner-container">
            
            <div class="box">
                <a href="category-foods.php">
                    <img src="../images/restos/kfc.jpg" alt="Pizza" class="imgn img-curve">
                </a>
            </div>
            
            <div class="box">
                <a href="category-foods.php">
                    <img src="../images/restos/taco.jpg" alt="Momo" class="imgn img-curve">
                </a>
            </div>
            
            <div class="box">
                <a href="category-foods.php">
                    <img src="../images/restos/mcd.jpg" alt="Burger" class="imgn img-curve">
                </a>
            </div>
            <div class="clearfix"></div>
        </div> 
        
    </section>

<!-- Partner Resto Section -->
<!-- category sections starts here -->
  <!-- <section class='categories'>
        
        <h2 class="text-center">Explore category</h2>
        <div class="container">

        /*<?php
        /*
            define('SITEURL','https://localhost/BitesBank/');
            define('LOCALHOST', 'localhost');
            define('DB_USERNAME','root');
            define('DB_PASSWORD', '');
            define('DB_NAME','bitesbank');

            $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error());

            $db_select= mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

            $sql= "SELECT * FROM category";
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
                            <div class="box-3 float-container">
                            <a href="category-foods.php">
                                <img  src="<?php echo SITEURL;?>images/category/<?php echo $img_name;?>" alt="Pizza" style="height:400px;class="img-responsive img-curve">
                            </a>
                            </div>

                            <!-- style="width:90%; height: 70%; padding-left:2%;" -->
                        <?php


                    }
                }
                else
                {
                     echo "<div class='error'>Category not found</div>";
                }
                */
                        ?>

        
             -->
            
           
            <div class="clearfix"></div>
        </div> 
        
    </section>

           

<!-- Limited Time Offers -->

    <section class="food-menu">
        <h2 class="text-center">Limited Time Offers</h2><br>
        <div id="container-3">
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="../images/food-items/fm-mcd.jpg" alt="Chicke Hawain Pizza" class="imgn img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>McSpicy Paneer Meal</h4>
                    <p class="food-price">Rs.339.03</p>
                    <p class="food-detail">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos ipsum fugit adipisci optio natus ex aut dignissimos nesciunt, animi suscipit.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="../images/food-items/fm-br.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cotton Candy (L)</h4>
                    <p class="food-price">Rs.208.05</p>
                    <p class="food-detail">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae quo adipisci sed, ullam dolor deserunt harum quam aspernatur odit nemo debitis distinctio libero nostrum quis.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="../images/food-items/fm-nat.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Malai Ice-cream (500g)</h4>
                    <p class="food-price">Rs.275</p>
                    <p class="food-detail">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni quo doloribus cupiditate nobis sapiente dolorum fuga libero, aut fugiat quasi ullam facere, tempore excepturi sed.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="../images/food-items/fm-kfc.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ultimate Savings Bucket</h4>
                    <p class="food-price">Rs.665.71</p>
                    <p class="food-detail">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptatum ducimus aspernatur non natus debitis temporibus dolorem laborum! Autem, tenetur iure!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                <img src="../images/food-items/fm-taco.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mexican Paneer Taco</h4>
                    <p class="food-price">Rs.129.33</p>
                    <p class="food-detail">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni ducimus enim laboriosam tenetur. Ab earum sunt non, quo officiis maxime 
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="../images/food-items/fm-navr.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chilly Fried Rice</h4>
                    <p class="food-price">Rs.125</p>
                    <p class="food-detail">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur exercitationem eligendi perferendis pariatur vero similique quaerat.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary align-bottom">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>

<!-- Limited Time Offers -->

<!-- Socials -->

    <section class="social footer">
        <div class="container text-center">
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
    
<!-- Socials -->


<?php include('../partials/footer.php') ?>