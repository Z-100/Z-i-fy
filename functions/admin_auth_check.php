<?php
    require_once("../classes/session_start.php");
    
    if(!isset($_SESSION['admin'])) {
        header("Location: home.php");
    }
?>