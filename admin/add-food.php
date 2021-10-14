<?php include('../partials/admin-header.php') ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Add Food</h1>
            <br><br>

            <?php
            if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

            ?>

        <form action="" method="POST" enctype="multipart/form-data">
         <table class="tbl-30">
                     <tr>
                         <td>
                             Title:
                         </td>
                         <td>
                             <input type="text" name="title" placeholder=" Title of the food" >
                         </td>
                     </tr>
                     <tr>
                         <td>
                            Description:
                         </td>
                         <td>
                            <textarea name="description" cols="30" rows="5" placeholder=" Description of the food"></textarea>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             Price:
                         </td>
                         <td>
                             <input type="number" name="price">
                             
                         </td>
                     </tr>
                      <tr>
                         <td>
                             Select Image:
                         </td>
                         <td>
                             <input type="File" name="image">
                             
                         </td>
                     </tr>
                      <tr>
                         <td>
                             Category:
                         </td>
                         <td>
                            <select name="category">
                            <?php

                                $sql = "SELECT * FROM category WHERE active='yes'";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);

                                if($count>0)
                                {
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        $id=$row["id"];
                                        $title=$row["title"];
                                        ?>
                                        <option value="<?php echo $id;?>"><?php echo $title; ?></option>

                                        <?php
                                        

                                    }

                                }
                                else
                                {

                                    ?>
                                    <option value="0">No category found</option>
                                    <?php
                                }
                        ?> 
                         </td>
                     </tr>
                      <tr>
                         <td>
                             Featured:
                         </td>
                         <td>
                             <input type="radio" name="active"value='Yes'> Yes
                             <input type="radio" name="active" value='No'> No
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Active:
                         </td>
                         <td>
                             <input type="radio" name="active"value='Yes'> Yes
                             <input type="radio" name="active" value='No'> No
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                         </td>
                     </tr>
                </table>



            </form>

            <?php

                if(isset($_POST['submit']))
                {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $category = $_POST['category'];
                    if(isset($_POST['featured']))
                    {
                        $featured = $_POST['featured'];
                    }
                    else
                    {
                        $featured='No';
                    }

                    if(isset($_POST['active']))
                    {
                        $active = $_POST['active'];
                    }
                    else
                    {
                        $active='No';
                    }

                    if(isset($_FILES['image']['name']))
                    {
                        $image_name=$_FILES['image']['name'];

                        if($image_name !="")
                        {
                                $ext=end(explode('.',$image_name));
                                $image_name="Food-Name_".rand(000,999).'.'.$ext;

                                $source_path=$_FILES['image']['tmp_name'];

                                $destination_path="../images/food/".$image_name;

                                $upload=move_uploaded_file($source_path,$destination_path);

                            if($upload==FALSE)
                            {
                                $_SESSION['upload']= "<div class='error'>Failed to Upload Images</div>";
                                header("Location:".SITEURL.'admin/add-food.php');
                                die();
                            }
                        }

                    }
                    else
                    {
                        $image_name="";
                    }
                    

                    $sql3= "INSERT INTO food SET
                            title='$title',
                            description='$description',
                            price='$price',
                            image_name='$image_name',
                            category_id='$category',
                            featured='$featured',
                            active='$active'
                             ";
                    
                    
                    $res2= mysqli_query($conn, $sql3);

                    if($res2==TRUE)
                    {
                        $_SESSION['add']= "<div class='success'>Successfully added food item</div>";
                        header("Location:".SITEURL.'admin/manage-food.php');
                    }
                    else
                    {
                        $_SESSION['add']= "<div class='error'>Failed to add Food</div>";
                        header("Location:".SITEURL.'admin/manage-food.php');

                    }

                }




            ?>

            








            </div>
        <div class="clearfix"> </div>
    </div>

    </body>

<?php include("../partials/footer.php") ?>