<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-I-fy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id = left>
        <div id="top">
            <img src="img/z-i-fy_trans.png" alt="logo" id="logo"">
        </div>
        <div id="nav-mid">
            <ul>
                <li><a href=inde.php><img src="img/homeIcon.png" width="45vw" alt="">Home</a></li>  
                <li><a href="searchfield.php"><img src="img/searchIcon.png" width="45vw" alt="">Search</a></li> 
                <li><a href="#"><img src="img/libraryIcon.png" width="45vw" alt="">Library</a></li> 
            </ul>         
        </div>
        <div is="playlst">

        </div>
    </nav>
    <div id="main">
        <div id="top"></div>
        <div id="main-items">
            <div class="main-item">
                <?php
                    echo"SELECT thumbnail FROM songs WHERE "
                ?>
            </div>
            <div class="main-item"></div>
            <div class="main-item"></div>
            <div class="main-item"></div>
            <div class="main-item"></div>
            <div class="main-item"></div>
            <div class="main-item"></div>
            <div class="main-item"></div>
        </div>

    </div>
    <div id="player">

    </div>
</body>
</html>