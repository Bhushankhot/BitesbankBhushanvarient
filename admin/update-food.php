<?php include('../partials/admin-header.php') ?>


    <?php

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql2="SELECT * FROM food WHERE id=$id";

        $res2= mysqli_query($conn, $sql2);
        $row=mysqli_fetch_assoc($res2);

        $title=$row['title'];
        $description=$row['description'];
        $price=$row['price'];
        $current_image= $row['image_name'];
        $current_category= $row['category_id'];
        $featured= $row['featured'];
        $active= $row['active'];
    }
    else
    {
        header("Location:".SITEURL.'admin/manage-food.php');
    }


    ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Food</h1>
            <br><br>
             



             <form action="" method="POST" enctype="multipart/form-data">
              <table class="tbl-30">
                     <tr>
                         <td>
                             Title:
                         </td>
                         <td>
                             <input type="text" name="title" value="<?php echo $title;?> "  >
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Description:
                         </td>
                         <td>
                            <textarea name="description" cols="30" rows="5" > <?php echo $description;?></textarea>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Price:
                         </td>
                         <td>
                           <input type="number" name="price" value="<?php echo $price;?>">
                             
                         </td>
                     </tr>
                     <td>
                        Current Image:
                         </td>
                         <td>
                            <?php
                              if($current_image!="")
                                {
                                    ?>
                                    <img  src="<?php echo SITEURL;?>images/food/<?php echo $current_image;?>" width="100px">
                                    <?php
                                }
                                else
                                {
                                    echo "<div class='error'>Image Not added</div>";
                                }
                        
                            ?>
                         </td>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            New Image:
                         </td>
                         <td>
                            <input type="file" name="image" >
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
                                        $category_id=$row["id"];
                                        $category_title=$row["title"];
                                        ?>
                                         <!-- echo "<option value='$category_id'> $category_title</option>"; -->
                                        <option <?php if($current_category==$category_id){echo "selected";}?> value="<?php echo $category_id;?>"><?php echo $category_title;?></option
                                        <?php
                                       
                                        

                                    }

                                }
                                else
                                {
                                    

                                    
                                    echo "<option value='0'>No category found</option>";
                                    
                                }
                        ?> 
                             
                         </td>
                        </tr>
                     <tr>
                         <td>
                             Featured:
                         </td>
                         <td>
                             <input <?php if($featured=="Yes"){echo "checked";} ?> type="radio" name="featured" value='Yes'> Yes
                             <input <?php if($featured=="No"){echo "checked";} ?> type="radio" name="featured" value='No'> No
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Active:
                         </td>
                         <td>
                             <input <?php if($active=="Yes"){echo "checked";} ?> type="radio" name="active"value='Yes'> Yes
                             <input <?php if($active=="No"){echo "checked";} ?> type="radio" 
                             name="active" value='No'> No
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                           
                             <input type="submit" name="submit" value="Update Food" class="btn-secondary">
                         </td>
                     </tr>
                </table>

            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $id = $_POST['id'];
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $price=$_POST['price'];
                    $current_image= $_POST['image_name'];
                    $category= $_POST['category_id'];
                    $featured= $_POST['featured'];
                    $active= $_POST['active'];

                    if(isset($_FILES['image']['name']))
                    {
                        $image_name=$_FILES['image']['name'];
                        if($image_name !="")
                        {
                            $ext=end(explode('.',$image_name));
                            $image_name="Food_category_".rand(000,999).'.'.$ext;

                            $source_path=$_FILES['image']['tmp_name'];

                            $destination_path="../images/food/".$image_name;

                            $upload=move_uploaded_file($source_path,$destination_path);

                            if($upload==FALSE)
                            {
                                $_SESSION['upload']= "<div class='error'>Failed to Upload Images</div>";
                                header("Location:".SITEURL.'admin/manage-food.php');
                                die();
                            }

                        }
                    }
                    else
                    {
                         $image_name=$current_image;
                    }
                    
                        $sql3="UPDATE food SET
                            title='$title',
                            description='$description',
                            price='$price',
                            image_name='$image_name',
                            category_id='$category',
                            featured='$featured',
                            active='$active'
                            WHERE id='$id'
                             ";

                        $res3 = mysqli_query($conn, $sql3);
                        if($res3== TRUE)
                        {
                            $_SESSION['update2']= "<div class='success'>Food updated successfully.</div>";
                            header("Location:".SITEURL.'admin/manage-food.php');
                            // echo "Data inserted";
                        }
                        else
                        {
                            $_SESSION['update2']= "<div class='error'>Failed to update Category.</div> ";
                            header("Location:".SITEURL.'admin/manage-food.php');
                            // echo "lag gaye bhai";
                        }



                }
               
            
            ?>















</div>
        <div class="clearfix"> </div>
    </div>

    </body>

<?php include("../partials/footer.php") ?>