<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Add favicon -->
</head>
<body>
    <!-- 

        Add code for side bar

    -->
    <main>
        <h1>Search</h1>

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
                                        echo "<th>#</th>";
                                        echo "<th id=title>TITLE</th>";
                                        echo "<th id=album>ALBUM</th>";
                                        echo "<th id=artist>ARTIST</th>";
                                        echo "<th id=duration>DURATION</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                
                                echo "<tbody>";
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td";
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
    </main>
</body>
</html>