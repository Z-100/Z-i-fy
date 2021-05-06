<?php
    require_once("../functions/session_start.php");
    require_once("../functions/auth_check.php");
    require_once("../functions/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.html"); ?>
    <title>Z-I-fy - Home</title>
</head>
<body>
    <nav id ="left">
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
    
    <div id="blue-main" style="background: linear-gradient(180deg, <?php echo $hex1; ?> 8%, <?php echo $hex2; ?> 50%, rgba(0,0,0,1) 96%)">
        <div id="top">
                <?php require_once("../classes/userField.php"); ?>
        </div>

        <div id="main-items">
            <div> <!-- Style this with like 80% of the main-items width and a transparent background or so idk -->
                <a href="?activeDiv=0">Overview</a> <!-- All info abt acc link->edit profile-->
                <a href="?activeDiv=1">Subscriptions</a> <!-- mums credit card stuff -->
                <a href="?activeDiv=2">Edit profile</a>
                <a href="?activeDiv=3">change pw</a>
                <a href="?activeDiv=4">(notifications)</a>
                <a href="?activeDiv=5">privacy</a>
                <a href="?activeDiv=6">Apps</a>
                <a href="?activeDiv=7">redeem</a> <!-- Enter google play cards or so -->
            </div>

            <?php
                $activeDiv = @$_GET['activeDiv'];
                switch ($activeDiv) {
                    case "0":
                        require_once("../classes/accountDivs/overview.html");
                        break;
                    case "1":
                        require_once("../classes/accountDivs/subscriptions.html");
                        break;
                    case "2":
                        require_once("../classes/accountDivs/editprofile.html");
                        break;
                    case "3":
                        require_once("../classes/accountDivs/changepassword.html");
                        break;
                    case "4":
                        require_once("../classes/accountDivs/notifications.html");
                        break;
                    case "5":
                        require_once("../classes/accountDivs/privacy.html");
                        break;
                    case "6":
                        require_once("../classes/accountDivs/apps.html");
                        break;
                    case "7":
                        require_once("../classes/accountDivs/redeem.html");
                        break;
                    default:
                        require_once("../classes/accountDivs/overview.html");
                        break;
                }
            ?>
        </div>
    </div>

    <div id="player">
        <?php require_once("../classes/player.php"); ?>
    </div>
</body>
</html>