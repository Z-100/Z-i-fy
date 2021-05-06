<?php
    require_once("session_start.php");
    require_once("config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $session_id = (int)$_SESSION['id'];
    $session_username = $_SESSION['username'];

    $sql = "SELECT  id, username, password
            FROM users
            WHERE id = $session_id AND username = '$session_username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['id'] == $session_id && $row['username'] == $session_username && $row['password'] == $password) {
                echo "aacassa";
            } else {
                header("Location: ../php/account.php");
            }
        }
    }
    else {
        echo "<h1>some error shit</h1>";
    }
?>