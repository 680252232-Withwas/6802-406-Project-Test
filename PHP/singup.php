<?php

    $open_conect = 1;
    require('connect.php'); 
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    $confirm_passwords = $_POST['confirm_passwords'];
    if ($passwords !== $confirm_passwords) {
        die("Passwords do not match. Please <a href='../Html/Singup.html'>go back</a> and try again.");
    }
    $email = $_POST['email'];
    $sql = "SELECT * FROM $FROMS where username='$username' OR email='$email'";
    $result = mysqli_query($conect, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $result->num_rows;
    if ($result->num_rows == 0) {
        mysqli_query($conect, "INSERT INTO $FROMS (username, passwords, email) VALUES ('$username', '$passwords', '$email')");
        header("Location: ../Html/Home.html");
    } else {
        echo "Login failed. Please check that your username or email address is not already in use.";
        echo "<br><a href='../Html/Singup.html'>Go back to Sign Up</a>";
    }
?>