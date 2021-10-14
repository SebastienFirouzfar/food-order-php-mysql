<?php   

//authorization - access control

//check whether the user is logged in or not
if(!isset($_SESSION['user'])){ // if user session is not set
    //user is not logget in 

    //redirect to login with message from
    $_SESSION['no-login-message'] = "<div class='error'> Please login to access admin panel </div>"; 
    header("Location:".SITEURL.'admin/login.php'); 

}

?>