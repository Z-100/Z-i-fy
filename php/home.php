<?php
    require_once("../functions/auth_check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.php"); ?>
    <title>Z-I-fy - Home</title>
</head>
<body>
    <nav id ="left">
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
                require_once("config.php");

                $sql = "SELECT songs.thumbnail, songs.title, artists.band
                        FROM songs
                            JOIN songs_artists ON songs.id = songs_artists.songs_id
                            JOIN artists ON artists.id = songs_artists.artists_id";

                $result = $conn->query($sql);
                $sth = mysqli_fetch_array($result);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class=main-item><img id="plp" src="data:image/jpeg;base64,'.base64_encode( $sth['thumbnail'] ).'"/><h2>' . $row['title'] . '</h2><h3>' . $row['band'] . '</h3></div>';
                    }
                }
                else {
                    echo "<h1>Error 404: FUck off</h1>";
                }
            ?>
        </div>
    </div>

    <div id="player">
        <?php require_once("../classes/player.php"); ?>
    </div>
</body>
</html>