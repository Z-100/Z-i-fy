<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-I-fy</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<nav id = left>
    <div id="top">
        <img src="../img/z-i-fy_trans.png" alt="logo" id="logo"">
    </div>

    <div id="nav-mid">
        <?php require_once("../classes/links.php"); ?>
    </div>

    <div id="playlist">
        <?php require_once("../classes/playlists.php"); ?>
    </div>
</nav>

<div id="main">
    <div id="top">
        <div id="userField">
            <?php require_once("../classes/userField.php"); ?>
        </div>
    </div>

    <div id="main-items">

    </div>
</div>

<div id="player">
    <?php require_once("../classes/playlists.php"); ?>
</div>
</body>
</html>