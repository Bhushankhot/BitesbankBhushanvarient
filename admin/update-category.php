<?php include('../partials/admin-header.php') ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Categories</h1>
            <br><br>


            <?php
              if(isset($_GET['id'] ))
                {
                    $id=$_GET['id'];
                    
                    $sql = "SELECT * FROM category WHERE id=$id";
                    $res= mysqli_query($conn, $sql);
                    $count= mysqli_num_rows($res);

                    if($count==1)
                    {
                        $rows=mysqli_fetch_assoc($res);
                        $title=$rows['title'];
                        $current_image=$rows['img_name'];
                        $featured=$rows['featured'];
                        $active=$rows['active'];

    
                    }
                    else
                    {
                        $_SESSION['no-category']= "<div class='error'>Category not found</div> ";
                        header("Location:".SITEURL.'admin/manage-catogories.php');
                    }
                
                }
                else
                {
                     header("Location:".SITEURL.'admin/manage-catogories.php');
                }












                ?>


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
                     <td>
                        Current Image:
                         </td>
                         <td>
                             <?php
                              if($current_image!="")
                                {
                                    ?>
                                    <img  src="<?php echo SITEURL;?>images/category/<?php echo $current_image;?>" width="100px">
                                    <?php
                                }
                                else
                                {
                                    echo "<div class='error'>Image Not added</div>";
                                }
                        
                            ?>
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
                              <input type="hidden" name="id" value="<?php echo $id;?> " >
                               <input type="hidden" name="current_image" value="<?php echo $current_image;?> " >
                             <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                         </td>
                     </tr>
                </table>

            </form>

            <?php
             if(isset($_POST['submit']))
            {
                
                $id=$_POST['id'];
                $title=$_POST['title'];
                $current_image=$_POST['current_image'];
                $featured=$_POST['featured'];
                $active=$_POST['active'];

                if(isset($_FILES['image']['name']))
                {

                }
                else
                {
                    $img_name=$current_image;
                }


                $sql3= "UPDATE category SET title='$title',featured='$featured',active='$active' WHERE id='$id'";

                $res2 = mysqli_query($conn, $sql3);
                if($res2== TRUE)
                {
                    $_SESSION['update2']= "<div class='success'>Category updated successfully.</div>";
                    header("Location:".SITEURL.'admin/manage-catogories.php');
                    // echo "Data inserted";
                }
                else
                {
                    $_SESSION['update2']= "<div class='error'>Failed to update Category.</div> ";
                    header("Location:".SITEURL.'admin/manage-catogories.php');
                    // echo "lag gaye bhai";
                }
                
            }
            ?>


       </div>
        <div class="clearfix"> </div>
    </div>

    </body>

<?php include("../partials/footer.php") ?>