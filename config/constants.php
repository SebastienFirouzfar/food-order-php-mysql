<?php 

//start session
session_start();


 //Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/food-order-php-mysql/');
$host = 'localhost'; 
$user = 'root';
$password = ''; 
$database = 'food-order'; 

//  define('LOCALHOST', 'localhost');
//  define('DB_USERNAME', 'root');
//  define('DB_PASSWORD', '');
//  define('DB_NAME', 'food-order');
 
 $conn = mysqli_connect($host, $user, $password) or die('Erreur lignes 27'); //Database Connection
 $db_select = mysqli_select_db($conn, $database) or die('Erreur lignes 28'); //SElecting Database

?>