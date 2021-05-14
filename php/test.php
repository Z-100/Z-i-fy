<?php
    $PATH = "../playlists/";
    $UUID = uniqid();
    $default = file_get_contents("../classes/defaultPlaylist.php");

    $newFile = fopen($PATH . $UUID . ".php", "w") or die("Unable to create playlist");

    fwrite($newFile, $default);
    header("Location: ../playlists/" . $PATH . $UUID . ".php");