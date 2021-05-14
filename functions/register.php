<?php
    require_once("config.php");

    $crusername = $_POST['crusername'];
    $crpassword = $_POST['crpassword'];
    $cfpassword = $_POST['cfpassword'];
    $token = $_POST['token'];


    $sql1 = "SELECT *
            FROM users
            WHERE username = '$crusername'";

    $sql2 = "INSERT INTO users (username, password) VALUES ('$crusername','$crpassword')";

    $result = $conn->query($sql1);

    if ($token == 69420) {
        if ($result->num_rows > 0) {
            // while ($row = $result->fetch_assoc()) {
                header("Location: ../php/login.php?message=Username already exists");
            // }
        } else {
            $conn->query($sql2);
        }
    } else {
        echo "SHING SHONG WRONG TOK-ON";
    }
?>