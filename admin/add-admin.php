<?php include('../partials/admin-header.php') ?>

 <div class="main-content">
        <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>


        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter your Full Name" ></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Enter your Username" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter your Password" ></td>
                </tr>
                 <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
                </tr>
            </table>




        </form>






                
        </div>
        <div class="clearfix"> </div>
    </div>










<?php include("../partials/footer.php") ?>


<?php

    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username =$_POST['username'];
        $password =md5($_POST['password']);
    



        $sql= " INSERT INTO adminb SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

    


        if($res== TRUE)
        {
            $_SESSION['add']= "<div class='success'>Admin added successfully.</div>";
            header("Location:".SITEURL.'admin/manage-admin.php');
            // echo "Data inserted";
        }
        else
        {
            $_SESSION['add']= "<div class='error'>Failed to add admin.</div> ";
            header("Location:".SITEURL.'admin/manage-admin.php');
            // echo "lag gaye bhai";
        }
    }


?>