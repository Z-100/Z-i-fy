<?php
    require_once("../php/config.php");

    $crusername = $_POST['crusername'];
    $crpassword = $_POST['crpassword'];
    $cfpassword = $_POST['cfpassword'];
    $token = $_POST['token'];
    $sql = "INSERT INTO users (username, password) VALUES ('$crusername','$crpassword')";

    if ($token = 69420) {
        if($crpassword == $cfpassword) {
            mysql_query($sql);
        } else {
            echo "Paswort not matsch";
        }
    } else {
        echo "SHING SHONG WRONG TOK-ON";
    }
?>