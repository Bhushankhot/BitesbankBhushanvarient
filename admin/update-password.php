<?php include('../partials/admin-header.php') ?>

    <div class="main-content">
        <div class="wrapper">
        <h1>Change Password</h1>

        <?php

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
        }

        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Current Password</td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current password">

                    </td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New password">
                        
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm password">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">

                    </td>
                </tr>


            </table>

</form>


                <?php
                //Check whether the Submit Button is clicked on Not
                        if(isset($_POST['submit']))
                        {
                        //echo "Clicked";
                        //1. Get the data from Form
                            $id=$_POST["id"];
                            $current_password = md5($_POST['current_password']);
                            $new_password = md5($_POST['new_password']);
                            $confirm_password=md5($_POST['confirm_password']);
                            //1/2. Check whether the user with current ID and Current Password exists or Not
                            $sql = "SELECT * FROM adminb WHERE id=$id AND password='$current_password'";

                            $res= mysqli_query($conn, $sql);

                            if($res==TRUE)
                            {
                            $count= mysqli_num_rows($res);

                            if($count==1)
                            {
                                if($new_password==$confirm_password)
                                {
                                    //update the Password
                                    $sql2 = "UPDATE adminb SET password='$new_password'
                                    WHERE id=$id";
                                    $res2 = mysqli_query($conn, $sql2);
                                    if($res2== TRUE)
                                    {
                                        $_SESSION['change-pwd']= "<div class='success'>Password changed successfully.</div>";
                                        header("Location:".SITEURL.'admin/manage-admin.php');
                                        // echo "Data inserted";
                                    }
                                    else
                                    {
                                        $_SESSION['change-pwd']= "<div class='error'>Failed to change Password</div> ";
                                        header("Location:".SITEURL.'admin/manage-admin.php');
                                        // echo "lag gaye bhai";
                                    }
                                }
                            else
                                {
                                    $_SESSION['pwd-not-match']= "<div class='error'>Password did not match</div> ";
                                    header("Location:".SITEURL.'admin/manage-admin.php');
                                }
                            }
                            else
                            {
                                 $_SESSION['user-not-found']= "<div class='error'>User not found</div> ";
                                        header("Location:".SITEURL.'admin/manage-admin.php');
                            }
                        }
                    }
                        


                ?>





                    
        </div>
        <div class="clearfix"> </div>
    </div>

    </body>
</html></html>

<?php include("../partials/footer.php") ?>