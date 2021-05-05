<?php
    require_once("../classes/session_start.php");
    require_once("../php/config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password, admin
            FROM users
            WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if($username = $row['username'] && $password = $row['password']) {
                sleep(1);
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                    if ($row['admin'] != FALSE) {
                        $_SESSION['admin'] = $row['admin'];
                    }
                header("Location: ../php/home.php");
            }
        }
    } elseif (mysqli_num_rows($result) == 0) {
        sleep(1);
        header("Location: ../php/login.php?message = Incorrect username or password");
    } else {
        header("Location: ../php/login.php?message = Database under maintenance");
    }
?>