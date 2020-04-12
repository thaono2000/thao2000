<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'test';
    $con = new mysqli($host, $username,$password, $db);
    if (mysqli_connect_errno()) {
        echo "Connect fail:" .mysqli_connect_errno();
    } 
    
?>


