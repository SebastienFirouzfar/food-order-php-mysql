<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update admin</h1>
        <br><br>

        <?php 
            //get the id of selected admin
            $id = $_GET['id'];

            // create a query to get the details
            $sql = "SELECT * FROM tbl_admin WHERE id = $id"; 

            //execute the query
            $res = mysqli_query($conn, $sql); 

            //check whether the query is executed or not
            if($res == true) {
                
                //check the data is available or not
                $count = mysqli_num_rows($res); 
                
                //check whether we have admin data or not
                if($count == 1){
                    //get the details 
                    echo "Admin available";
                }else{
                    //redirect to manage admin page
                    header("location:".SITEURL."admin/manage-admin.php");
                }
            }


        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full name : </td>
                    <td>
                        <input type="text" name="full_name" value="">
                    </td>
                </tr>

                <tr>
                    <td>Username : </td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="update admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>


<?php include('partials/footer.php'); ?>