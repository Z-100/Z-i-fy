<?php
    require_once("../functions/auth_check.php");
    require_once("../functions/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../functions/javascript.js" language="javascript"></script>
    <?php require_once("../classes/head.html"); ?>
    <title>Z-i-fy - Search</title>
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
        <div id="top">
            <div class="searchbar">
              <input type="text" id="searchInput" onkeyup="searchBar()" placeholder="Search for..">
              
              <select id="searchFilter">
                    <option value="">Search by</option>
                    <option value="1">TITLE</option>
                    <option value="2">ALBUM</option>
                    <option value="3">ARTIST</option>
                </select>
            </div>

            <div id="userField">
                <?php require_once("../classes/userField.php"); ?>
            </div>
        </div>

        <div id="songList">
            <?php
                $sql = "SELECT songs.id, songs.title, albums.name, artists.band, songs.duration 
                        FROM songs
                            JOIN albums ON albums.id = songs.album_id
                            JOIN songs_artists ON songs.id = songs_artists.song_id
                            JOIN artists ON artists.id = songs_artists.artist_id";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
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
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr class=trBody>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['title'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['band'] . "</td>";
                                            echo "<td>" . $row['duration'] . "</td>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                echo "</tbody>";
                            echo "</table>";
                        echo "</div>";
                        $result->free();
                    } else {
                        echo "<p class='lead'><em>No songs added</em></p>";
                    }
                $conn->close();
            ?>
        </div>
    </div>

    <div id="player">
        <?php require_once("../classes/player.php"); ?>
    </div>
</body>
</html>