 <?php include('../partials/admin-header.php') ?>


  <div class="main-content">
        <div class="wrapper">
        <h1>update  Admin</h1>
        <br>
        <br>
        <?php
            

            $id=$_GET['id'];
            $sql = "SELECT * FROM adminb WHERE id=$id";

            $res= mysqli_query($conn, $sql);

            if($res==TRUE)
            {
                $count= mysqli_num_rows($res);

                if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
                    $full_name=$rows['full_name'];
                    $username=$rows['username'];
                    

                }
                else
                {
                     header("Location:".SITEURL.'admin/manage-admin.php');
                }
            }
        
        
        
        
        
        
        ?>












         <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name;?> " ></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $username;?> " ></td>
                </tr>
                 <tr>
                    <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id;?> " >
                    <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                </td>
                </tr>
            </table>




        </form>

            <?php
             if(isset($_POST['submit']))
            {
                //echo "Button clicked";
                $id=$_POST['id'];
                $full_name = $_POST['full_name'];
                $username =$_POST['username'];

                    $sql= " UPDATE adminb SET
                full_name='$full_name',
                username='$username'
                WHERE id='$id'
                ";

                $res = mysqli_query($conn, $sql);
                if($res== TRUE)
                    {
                    $_SESSION['update']= "<div class='success'>Admin updated successfully.</div>";
                    header("Location:".SITEURL.'admin/manage-admin.php');
                    // echo "Data inserted";
                    }
                else
                {
                    $_SESSION['update']= "<div class='error'>Failed to update admin.</div> ";
                    header("Location:".SITEURL.'admin/manage-admin.php');
                    // echo "lag gaye bhai";
                }
            }
            ?>
















              
        </div>
        <div class="clearfix"> </div>
    </div>










 


<?php include("../partials/footer.php") ?>

