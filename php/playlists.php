<?php
    require_once("../functions/auth_check.php");
    require_once("../functions/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.html"); ?>
    <title>REPLACE WITH NAME</title>
</head>
<body>
    <nav id="left">
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

    <div id="grey-main">
        <?php
            echo "<div id=songList>";
                $sql = "SELECT songs.title AS title, albums.name AS alname, artists.band AS band, songs.duration AS duration, playlists.name AS plname
                        FROM playlists_songs
                            JOIN playlists ON playlists_songs.playlist_id = playlists.id
                            JOIN songs ON playlists_songs.song_id = songs.id
                                JOIN albums ON songs.album_id = albums.id
                                JOIN songs_artists ON songs_artists.song_id = songs.id
                                JOIN artists ON songs_artists.artist_id = artists.id
                        WHERE playlists.user_id = '$_SESSION[id]' AND playlists.uuid = '$_GET[uuid]'
                        ";
                $count = 0;

                $result = $conn->query($sql);
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                $row = $rows[0];
                if (isset($row)) {
                    echo "<div id=top>";
                        echo "<div class=playlistname>";
                            echo "<h1>" . $row['plname'] . "</h1>";
                        echo "</div>";
        
                        echo "<div id=userField>";
                            require_once("../classes/userField.php");
                        echo "</div>";
                    echo "</div>";

                        echo "<div id=searchfieldList>";
                            echo "<table id=searchFieldTable class=styled-table>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th id=count>#</th>";
                                        echo "<th id=title>TITLE</th>";
                                        echo "<th id=album>ALBUM</th>";
                                        echo "<th id=artist>ARTIST</th>";
                                        echo "<th id=duration>DURATION</th>";
                                    echo "</tr>";
                                echo "</thead>";

                                echo "<tbody>";
                                    foreach ($rows as $nr => $row) {
                                        echo "<tr class=trBody>";
                                            echo "<td>" . ($nr + 1) . "</td>";
                                            echo "<td>" . $row['title'] . "</td>";
                                            echo "<td>" . $row['alname'] . "</td>";
                                            echo "<td>" . $row['band'] . "</td>";
                                            echo "<td>" . $row['duration'] . "</td>";
                                        echo "</tr>";
                                    }
                                echo "</tbody>";
                            echo "</table>";
                        echo "</div>";
                    } else {
                        echo "<p class='lead'><em>No songs added</em></p>";
                    }
                $conn->close();
            echo "</div>";
        ?>
    </div>

    <div id="player">
        <?php require_once("../classes/player.php"); ?>
    </div>
</body>
</html>