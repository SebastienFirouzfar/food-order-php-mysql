<?php include('../config/constants.php') ?>
<html>

<head>
    <title>Login - Food Order System</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="login">
        <h1 class="text-center">Login</h1>

        <form action="" method="POST">
            <label for="">Username : </label>
            
            <input type="text" name="username" placeholder="Enter your username"><br><br>

            <label for="">Password : </label>
            <input type="password" name="password" placeholder="Enter password">

          <p class="text-center">Create by firouzfar sebastien</p> <br>
            <input type="submit" name="submit" value="Login" class="btn-primary">

        </form>

    </div>
</body>

</html>

<?php 
if(isset($_POST['submit'])){
    //process for login
    // 1 get the data from login form
    $user = $_POST['username'];
    $password = $_POST['password']; 

    // 2 SQL to check whether the user with username and password exist or Not
    $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";

    // 3 execute the query
    $res = mysqli_query($conn, $sql); 

    // 4 count rows to check whether the user exist or Not
    $count = mysqli_num_rows($res); 

    if($count == 1) {
        $_SESSION['login'] = "<div class='success'> Login successful</div> "; 
        header("Location:".SITEURL.'admin/'); 
    }else{
        $_SESSION['login'] = "<div class='error'> Username or password did not match</div> ";  
        header("Location:".SITEURL.'admin/'); 
    }

}

?>