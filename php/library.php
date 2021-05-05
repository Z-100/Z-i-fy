<?php
    require_once("../functions/auth_check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.php"); ?>
    <title>Z-i-fy - Library</title>
</head>
<body>
    <nav id = left>
        <div id="left-top">
            <img src="../img/z-i-fy_trans.png" alt="logo" id="logo"">
        </div>

        <div id="nav-mid">
            <?php require_once("../classes/links.php"); ?>
        </div>

        <div id="playlist">
            <?php require_once("../classes/playlists.php"); ?>
        </div>
    </nav>

    <div id="blue-main">
        <div id="top">
            <div id="userField">
                <?php require_once("../classes/userField.php"); ?>
            </div>
        </div>

        <div id="main-items">
            <?php
                require_once "config.php";
                $sql = "SELECT *
                        FROM playlists 
                        WHERE user_id = (SELECT id FROM users WHERE id =" . $_SESSION['id'] . ")";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $image = imagecreatefromstring($row['plp']); 
                        ob_start();
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<div class=main-item><img  id="plp" src="data:image/jpg;base64,' . base64_encode($data) . '"/>' . '<p>' . $row['name'] . '</p></div>';
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