<?php
    require_once("../php/config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password
            FROM users
            WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if($username = $row['username'] && $password = $row['password']) {
                sleep(1);
                session_start();
                $_SESSION["id"] = $row['id'];
                header("Location: ../php/home.php");
            }
        }
    } elseif (mysqli_num_rows($result) == 0) {
        sleep(1);
        header("Location: ../php/login.php");
    }
?>