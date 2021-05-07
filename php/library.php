<?php
    require_once("../functions/auth_check.php");
    // require_once("../Algorythm/dominantColour.php");
    require_once("../functions/config.php");
    require_once("../functions/session_start.php");

    $plName = @$_POST['plName'];
    $plDesc = @$_POST['plDesc'];
    $defaultPlp = file_get_contents('../Database/samplePics/plp.jpg');
    $id = $_SESSION['id'];

    $sql2 = "INSERT INTO playlists (name, user_id, plp, description) VALUES (?,?,?,?)";
    
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("siss", $plName, $id, $defaultPlp, $plDesc);

    $stmt->execute();
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
        <form action="" method="post">
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
                        $image = imagecreatefromstring($row['plp']); 
                        ob_start();
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<div class=main-item><img  id="plp" src="data:image/jpg;base64,' . base64_encode($data) . '"/>' . '<h2>' . $row['name'] . '</h2></div>';
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