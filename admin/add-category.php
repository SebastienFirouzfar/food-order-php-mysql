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
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title :</td>
                    <td><input type="text" name="title" placeholder="Category Title"></td>
                </tr>

                <tr>
                    <td>Select Images: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
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

              //1. Get the Value from CAtegory Form
              $title = $_POST['title'];

              //For Radio input, we need to check whether the button is selected or not
              if(isset($_POST['featured'])){
                  //Get the VAlue from form
                  $featured = $_POST['featured'];
              }else{
                  //SEt the Default VAlue
                  $featured = "No";
              }

              if(isset($_POST['active'])){
                  $active = $_POST['active'];
              }else{
                  $active = "No";
              }

              // check whether the image is selected or Not set the value for image name according
              print_r($_FILES['image']);

            //   die(); // break code 

            if(isset($_POST['image']['name'])){
                //upload the image
                // to Upload image we need image name, source path and destination path 
                $image = $_POST['image']['name'];
                $source_path = $_POST['image']['tmp_name'];
                $destination_path = ""; 
            }else{
                //don't upload the image and set the image as blank 
                $image_name = "";
            }

          //2. Create SQL Query to Insert CAtegory into Database
          $sql = "INSERT INTO tbl_category SET 
          title='$title',
          image_name='$image_name',
          featured='$featured',
          active='$active'
      ";

        //3. Execute the Query and Save in Database
        $res = mysqli_query($conn, $sql);

        //4. Check whether the query executed or not and data added or not
        if($res==true){
            //Query Executed and Category Added
            $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
            //Redirect to Manage Category Page
            header('location:'.SITEURL.'admin/manage-category.php');
        }else{
            //Failed to Add CAtegory
            $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
            //Redirect to Manage Category Page
            header('location:'.SITEURL.'admin/add-category.php');
        }
    }

        ?>

    </div>
</div>

<?php include('partials/footer.php') ?>