<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full name : </td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>

                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" placeholder="Enter your username"></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td><input type="password" name="password" placeholder="Enter your name"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>
<?php include('partials/footer.php'); ?>

<?php 
 //process the value from form and save it in database
 //check whether submit button is clicked or not
if(isset($_POST['submit'])){
    //button clicked
    // echo "Button click";

    // 1 get the data from form
    $full_name = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var(md5($_POST['password']), FILTER_SANITIZE_STRING); 


    // 2 sql query to save the data 
    //The SET command is used with UPDATE to specify which columns and values that should be updated in a table.
    $sql = "INSERT INTO tbl_admin SET 
    full_name='$full_name',
    username='$username',
    password='$password'
    ";

    // 3 execute query and save data in database
    $res = mysqli_query($conn, $sql) or die('Erreur ligne 64');

    // check whether the query is executed data is inserted into
    if($res==true){
        //data inserted into
        //echo 'data inserted'; 

        //create a session variable to display Message 
        $_SESSION['add'] = 'Admin added with success';
        header('location:'. SITEURL. 'admin/manage-admin.php');  

    }else{
        // echo 'data not inserted'; 
        $_SESSION['add'] = 'Admin added not success';
        header('location:'. SITEURL. 'admin/add-admin.php');  
    }

}

 ?>