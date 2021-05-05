<?php
    require_once("../classes/session_start.php");
    
    if(!isset($_SESSION['id'])) {
        header("Location: login.php");
    }
?>