<?php
    session_unset();
    session_destroy();
    header("Location: ../php/login.php");
?>