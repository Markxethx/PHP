<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', ' Mark John');
    define('DB_PASS', '567144');
    define('DB_NAME', 'php_dev');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check the connection
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }

    echo 'CONNECTED!';

?>
