<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="css/searchfield.css">
    <!-- Add favicon -->
</head>
<body>
    <nav id = left>
        <div id="top">
            <img src="img/z-i-fy_trans.png" alt="logo" id="logo"">
        </div>
        <div id="nav-mid">
            <ul>
                <li><a href=index.php><img src="img/homeIcon.png" width="45vw" alt="">Home</a></li>  
                <li><a href="searchfield.php"><img src="img/searchIcon.png" width="45vw" alt="">Search</a></li> 
                <li><a href="library.php"><img src="img/libraryIcon.png" width="45vw" alt="">Library</a></li> 
            </ul>         
        </div>
        <div is="playlst">
        </div>
    </nav>

    <div id=main>
        <?php
        require_once "config.php";
            $sql = "SELECT songs.id, songs.title, albums.name, artists.band, songs.duration 
                    FROM songs
                        JOIN albums ON albums.id = songs.albums_id
                        JOIN songs_artists ON songs.id = songs_artists.songs_id
                        JOIN artists ON artists.id = songs_artists.artists_id";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    echo "<div id=searchfieldList>";
                        echo "<table class=styled-table>";
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
                                    echo "<tr>";
                                        echo "<td id=count>" . $row['id'] . "</td>";
                                        echo "<td id=title>" . $row['title'] . "</td>";
                                        echo "<td id=album>" . $row['name'] . "</td>";
                                        echo "<td id=artist>" . $row['band'] . "</td>";
                                        echo "<td id=duration>" . $row['duration'] . "</td>";
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

    <div id="player">

    </div>
</body>
</html>