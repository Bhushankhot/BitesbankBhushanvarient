<?php include('../partials/admin-header.php') ?>

    <div class="main-content">
        <div class="wrapper">
        <h1>Manage Categories</h1>
        <br><br>
         <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }
                if(isset($_SESSION['delete2']))
                {
                    echo $_SESSION['delete2'];
                    unset($_SESSION['delete2']);
                }
                if(isset($_SESSION['no-category']))
                {
                    echo $_SESSION['no-category'];
                    unset($_SESSION['no-category']);
                }
                if(isset($_SESSION['update2']))
                {
                    echo $_SESSION['update2'];
                    unset($_SESSION['update2']);
                }
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }

                if(isset($_SESSION['failed-remove']))
                {
                    echo $_SESSION['failed-remove'];
                    unset($_SESSION['failed-remove']);
                }




            ?>
            <br><br>
        <a href="../admin/add-category.php" class=" btn-primary"> Add Category</a>
        <br>
        <br>
        <table class="tbl-full">
            <tr>
                <th>Sr.no</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>   

            <?php
            $sql = "SELECT * FROM category";

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
                        $featured=$rows['featured'];
                        $active=$rows['active'];
                        ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $title; ?></td>
                            <td>
                                <?php

                                if($img_name!="")
                                {
                                    ?>
                                    <img  src="<?php echo SITEURL;?>images/category/<?php echo $img_name;?>"v width="100px">
                                    <?php
                                }
                                else
                                {
                                    echo "<div class='error'>Image Not added</div>";
                                }
                        
                                ?>
                        
                            </td>



                            <td><?php echo $featured; ?></td>
                            <td><?php echo $active; ?></td>
                            <td>
                            <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class=" btn-secondary">Update Category </a> 
                            <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&img_name=<?php echo $img_name;?>" class=" btn-dangerr"> Delete Category </a>
                            </td>

                        </tr>
                        <?php


                    }
                }
                else
                {

                }
                    
                
                ?>

            



        </table>
          
          
            
        </div>
        <div class="clearfix"> </div>
    </div>

    </body>
</html></html>

<?php include("../partials/footer.php") ?>