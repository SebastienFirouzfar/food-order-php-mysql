<?php include('partials/menu.php') ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br><br>

        <?php 
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; //
                unset($_SESSION['add']);
            }
        ?>

        <br>
        <!--Add category start-->
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Title :</td>
                    <td><input type="text" name="title" placeholder="Category Title"></td>
                </tr>
                
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>


            </table>
        </form>

        <?php 
        //check whether the submit button is clicked or not
        if(isset($_POST['submit'])){
            // echo 'clicked'; 
            // 1 get the value from category from category
            $title = $_POST['title'];
             

            //for radio input, we need to check whether the button is selected or not
            if(isset($_POST['featured'])){
                //get the value from form
                $featured = $_POST['featured']; 
            }else{
                //set the default value
                $featured = "No"; 
            }

            if(isset($_POST['active'])){
                $active = $_POST['active']; 
            }else{
                $active = "No"; 
            }

            // 2 Create sql query to insert catégory intro database
            $sql = "INSERT INTO tbl_category SET
            title='$title',
            featured='$featured',
            active='$active'
            "; 

            // 3 Execute the query and save in database
            $res = mysqli_query($conn, $sql); 
            // 4 check whether the query executed or not ans data added or not

            if($res == true){
                //query Executed and category add
                $_SESSION['add'] = "<div class='success'> Category added successfully</div>"; 
                
                //redirect
                 header("Location:".SITEURL.'admin/manage-category.php'); 
            }else{
                //Failed to add category
                $_SESSION['add'] = "<div class='error'> faile to add Category</div>";  
                
                //redirect
                 header("Location:".SITEURL.'admin/manage-category.php'); 
            }
        }

        
        ?>

    </div>
</div>

<?php include('partials/footer.php') ?>