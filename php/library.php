<?php
    require_once("../functions/auth_check.php");
    // require_once("../Algorythm/dominantColour.php");
    require_once("../functions/config.php");
    require_once("../functions/session_start.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.html"); ?>
    <title>Z-i-fy - Library</title>
</head>
<body>
    <nav id = left>
        <div id="left-top">
            <img src="../img/z-i-fy_trans.png" alt="logo" id="logo"">
        </div>

        <div id="nav-mid">
            <?php require_once("../classes/links.html"); ?>
        </div>

        <div id="playlist">
            <?php require_once("../classes/playlists.php"); ?>
        </div>
    </nav>

    <div id="blue-main">
        <div id="top">
        <div class="addPlaylist">
        <form action="../functions/createPlaylist.php" method="post">
            <input type="text" name="plName" placeholder="Enter playlist name">
            <input type="text" name="plDesc" placeholder="Enter playlist description">
            <input type="submit" placeholder="Create playlist">
        </form>
    </div>

            <div id="userField">
                <?php require_once("../classes/userField.php"); ?>
            </div>
        </div>

        <div id="main-items">
            <?php
                $sql1 = "SELECT *
                        FROM playlists 
                        WHERE user_id = (SELECT id FROM users WHERE id =" . $_SESSION['id'] . ")";

                $result = $conn->query($sql1);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $UUID = $row['uuid'];
                        $image = imagecreatefromstring($row['plp']); 
                        ob_start();
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<a href=../playlists/' . $UUID . '.php?uuid=' . $UUID . '><div class=main-item><img  id="plp" src="data:image/jpg;base64,' . base64_encode($data) . '"/>' . '<h2>' . $row['name'] . '</h2></div></a>';
                        //Use img#pfp in .css file
                    }
                } else {

                }
            ?>
        </div>
    </div>

    <div id="player">
        <?php require_once("../classes/player.php"); ?>
    </div>
</body>
</html>