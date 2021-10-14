<?php include('../partials/admin-header.php') ?>

    <div class="main-content">
        <div class="wrapper">
        <h1>Manage Food</h1>
          <br><br>
        <a href="add-food.php" class=" btn-primary"> Add Food </a>
        <br>
        <br>
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
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
                if(isset($_SESSION['update2']))
                {
                    echo $_SESSION['update2'];
                    unset($_SESSION['update2']);
                }

                




        ?>



        <table class="tbl-full">
            <tr>
                 <th>Sr.no</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>   


            <?php
            $sql = "SELECT * FROM food";

            $res= mysqli_query($conn, $sql);
            $count= mysqli_num_rows($res);
            
                if($count>0)
                {    
                    $sn=1;
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        $id=$rows['id'];
                        $title= $rows['title'];
                        $price= $rows['price'];
                        $image_name=$rows['image_name'];
                        $featured=$rows['featured'];
                        $active=$rows['active'];
                        ?>
                         <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $title; ?></td>
                                <td>$<?php echo $price; ?></td>
                                <td>
                                <?php

                                if($image_name!="")
                                {
                                    ?>
                                    <img  src="<?php echo SITEURL;?>images/food/<?php echo $image_name;?>"v width="100px">
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
                                <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>"" class=" btn-secondary">Update Food </a> 
                                <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>"class=" btn-dangerr"> Delete Food </a>
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