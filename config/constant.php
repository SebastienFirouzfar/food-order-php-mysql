<?php 

// $host = 'localhost'; 
// $user = 'root';
// $password = ''; 
// $database = 'testsql'; 


// $option = array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_EMULATE_PREPARES => false
// ); 

// try{
//     $connexion = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password, $option); 
//     echo('connexion reussie :)'); 
//     die();
// }catch(PDOException $e){
//     die("Erreur ". $e->getMessage());
// }

define('')

$conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error($conn)); 
    $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error($conn));

?>