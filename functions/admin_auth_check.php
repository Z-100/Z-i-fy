<?php
    require_once("session_start.php");
    
    if(!isset($_SESSION['admin'])) {
        header("Location: home.php");
    }
?>