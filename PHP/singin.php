<?php

    $open_conect = 1;
    require('connect.php'); 
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    $sql = "SELECT * FROM $FROMS where username='$username' AND passwords='$passwords'";
    $result = mysqli_query($conect, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows > 0) {
        if ($row['username'] === $username && $row['passwords'] === $passwords) {
            header("Location: ../Html/Home.html");
        } else {
            echo "Login failed. Please check your username, or password.";
            echo "<br><a href='../Html/Singin.html'>Go back to Sign In</a>";
        }
    } else {
        echo "User account not found. Please check your username or password.";
        echo "<br><a href='../Html/Singin.html'>Go back to Sign In</a>";
    }
?>