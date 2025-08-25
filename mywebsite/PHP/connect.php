<?php
    
    if ($open_conect != 1) {
        die(header("Location: ../Html/Singup.html"));
    }
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';
    $FROMS = 'user';
    $conect = mysqli_connect($hostname, $username, $password, $database);
    if (!$conect) {
        echo "Failed to connect" . mysqli_connect_error($conect);
    }
?>