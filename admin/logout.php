<?php 
    
    include('../config/constants.php');

    // 1 destrory the session 
    session_destroy(); //unset *_SESSION['user']

    // 2 redirect to login page
    header('Location:'. SITEURL.'admin/login.php'); 

?>