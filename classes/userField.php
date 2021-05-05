<?php
    require_once("../php/config.php");
    require_once("session_start.php");

    $id = $_SESSION['id'];
   
   $sql = "SELECT *
            FROM users WHERE id =" . $id;

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image = imagecreatefromstring($row['pfp']); 
            ob_start();
            imagejpeg($image, null, 80);
            $data = ob_get_contents();
            ob_end_clean();
            echo '<img id=pfp src="data:image/jpg;base64,' . base64_encode($data) . '"/>' . '<p>' . $row['username'] . '</p>';
            //Use img#pfp in .css file
            echo "<a href=../functions/logout.php>Logut</a>";
        }
    } else {

    }
?>