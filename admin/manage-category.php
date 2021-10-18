<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE CATEGORY</h1>
        <br><br>

        <?php 
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; //
                unset($_SESSION['add']);
            }
        ?>


            <br><br>
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category </a>
        <table class="tbl-full">
            <tr>
                <th> Surname </th>
                <th> Full Name </th>
                <th> Username </th>
                <th> Actions </th>
            </tr>

            <?php 
                $sql = "SELECT * FROM tbl_admin"; 

                $res = mysqli_query($conn, $sql);

                //check whether the query is executed of not 
                if($res == true){
                    //count rows to check whether we have data in database
                    $rows = mysqli_num_rows($res); 

                    $sn = 1; //create a new variable ans assign the value
                    
                    if($rows > 0){
                        
                        //we have data in database
                        //using the while loop to get all the data from the database
                        //And while loop will run as long as we have data in the database
                        while($rows=mysqli_fetch_assoc($res)){
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username']; 
                            
                            //display the value in our table
                            ?>
                                <tr>
                                    <td> <?php echo $sn++; ?> </td>
                                    <td> <?php echo $full_name; ?> </td>
                                    <td> <?php echo $username; ?>  </td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                    </td>
                                </tr>

                                <?php
                        }
                    }else{

                    }
                }

            ?>
        </table>

    </div>

</div>

<?php include('partials/footer.php'); ?>