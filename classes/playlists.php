<?php
    $currenUser = 1;
    require_once("../php/config.php");
    $sql = "SELECT *
            FROM playlists  WHERE user_id = 1"; //Change user_id to value of the current logged in user

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
                echo "<a>" . $row['name'] . "</a>";
            echo "</li>";

        }
    } else {
        echo "<p>You haven't created any playlists yet!</p>";
    }
?>