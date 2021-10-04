<?php 

include("../config/constants.php");

// 1 get the id of admin to be deleted
$id = $_GET['id'];

// 2 create sql query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id = $id";

//execute sql query
$res = mysqli_query($conn, $sql); 

//check whether the query was executed successful or not

if($res == true){
    //query was executed successfully and admin deleted
    // echo 'Admin deleted'; 
    //create a session variable to display message
    $_SESSION['delete'] = 'admin deleted Successfully';
    header("location:".SITEURL."admin/manage-admin.php"); 

}else{
    //failed to delete admin
    // echo "admin not deleted"; 
    $_SESSION['delete'] = 'Failed to delete admin, try again later'; 
    header("location:".SITEURL."admin/manage-admin.php");
}

// 3 Redirect to manage admin page with message (success / error)



?>