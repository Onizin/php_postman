<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'db_testapi');
define('PORT', '3306');


$db_connection = mysqli_connect(HOST, USER, PASSWORD, DB, PORT);
if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>