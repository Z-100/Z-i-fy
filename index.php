<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-I-fy</title>
    <link rel="stylesheet" href="css/home.css">
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
                <li><a href="#"><img src="img/libraryIcon.png" width="45vw" alt="">Library</a></li> 
            </ul>         
        </div> 
        <div id="playlist">
            <?php 
            // on Work
             $currenUser = 1;
                require_once "config.php";
                $sql = "SELECT name
                        FROM playlists WHERE user_id = 1";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>";
                            echo "<a>" . $row['name'] . "</a>";
                        echo "</li>";

                    }
                } else {

                }
            ?>
        </div>
    </nav>
    <div id="main">
        <div id="top">
            <div id="userField">
            <?php
                require_once "config.php";
                $sql = "SELECT *
                        FROM users WHERE id = 1";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                            echo "<p>" . $row['username'] . "</p>";
                    }
                } else {

                }
            ?>
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
                            echo '<div class=main-item><img id="outputImg" width=75% src="data:image/jpeg;base64,'.base64_encode( $sth['thumbnail'] ).'"/><h2>' . $row['title'] . '</h2><h3>' . $row['band'] . '</h3></div>';
                        }
                    }
                    else {
                        echo "<h1>Error 404: FUck off</h1>";
                    }
            ?>
        </div>

    </div>
    <div id="player">
            
    </div>
</body>
</html>