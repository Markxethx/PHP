<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo '<h1> welcome ' . $_SESSION['username'] . '</h1>'; 
    } else {
        echo '<h1>Welcome Guest</h1>';
        echo  '<a href="/php-crash/13_session.php"/>Home</a>'; 
    }
?>