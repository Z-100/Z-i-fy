<?php
    require_once("../functions/config.php");
    require_once("../functions/session_start.php");

    $plName = @$_POST['plName'];
    $plDesc = @$_POST['plDesc'];
    $defaultPlp = file_get_contents('../Database/samplePics/plp.jpg');
    $id = $_SESSION['id'];
    // $PATH = "../playlists/";
    $UUID = uniqid();
    // $default = file_get_contents("../classes/defaultPlaylist.php");

    // $newFile = fopen($PATH . $UUID . ".php", "w") or die("Unable to create playlist");
    fwrite($newFile, $default);

    $sql2 = "INSERT INTO playlists (name, user_id, plp, description, uuid) VALUES (?,?,?,?,?)";
    
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("sisss", $plName, $id, $defaultPlp, $plDesc, $UUID);

    $stmt->execute();
    header("Location: ../php/library.php");
?>