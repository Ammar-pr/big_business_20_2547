<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname='eoe';

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'eoe');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$sSQL= 'SET CHARACTER SET utf8';

mysqli_query($conn,$sSQL) or die ('Can\'t charset in DataBase'); 
if ($conn->connect_error) {
    die("Connection failed please check data base HR ADMIB: " . $conn->connect_error);
} 
?>

