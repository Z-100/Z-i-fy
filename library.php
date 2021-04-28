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
                <li><a href="library.php"><img src="img/libraryIcon.png" width="45vw" alt="">Library</a></li> 
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
                require_once "config.php";
                $sql = "SELECT *
                        FROM playlists WHERE id = 1";

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
            
    </div>
</body>
</html>