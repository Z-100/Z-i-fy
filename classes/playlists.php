<?php
    require_once("../functions/session_start.php");
    require_once("../functions/config.php");
    
    $currenUser = 1;
    $sql = "SELECT *
        FROM playlists 
        WHERE user_id = (SELECT id FROM users WHERE id =" . $_SESSION['id'] . ")";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
                echo "<a href=playlists.php?uuid=" . $row['uuid'] . ">" . $row['name'] . "</a>";
            echo "</li>";

        }
    } else {
        echo "<p>You haven't created any playlists yet!</p>";
    }
?>