<?php 

$host = 'localhost'; 
$user = 'root';
$password = ''; 
$database = 'testsql'; 


$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
); 

try{
    $connexion = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password, $option); 
}catch(PDOException $e){
    die("Erreur ". $e->getMessage());
}

// define('LOCALHOST' ,'localhost');
// define('DB_USERNAME' ,'root');  
// define('DB_PASSWORD' ,''); 
// define('DB_NAME' ,'food-order'); 

// $host = 'localhost'; 
// $user = 'root';
// $password = ''; 
// $database = 'food-order'; 


//     $conn = mysqli_connect($host, $user , $password)or die(mysqli_error($conn)); 
//     $db_select = mysqli_select_db($conn,  $database) or die(mysqli_error($conn));

?>