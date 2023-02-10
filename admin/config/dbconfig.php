<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ju_online_admission";
    
  //Database credentails
define('DB_HOST', 'localhost');
define('DB_NAME', 'ju_online_admission');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn->set_charset("utf8");
if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>