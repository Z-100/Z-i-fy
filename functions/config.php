<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "zify2"; //Old Database: zify

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $link->connect_error);
        exit();
    }
?>