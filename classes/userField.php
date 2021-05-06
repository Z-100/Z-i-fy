<script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/style.css">

<?php
    require_once("../functions/config.php");
    require_once("../functions/session_start.php");

    $id = $_SESSION['id'];
   
   $sql = "SELECT *
            FROM users WHERE id =" . $id;

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image = @imagecreatefromstring($row['pfp']); 
            ob_start();
            imagejpeg($image, null, 80);
            $data = ob_get_contents();
            ob_end_clean();
                echo "<div id=userField class=dropdown>";
                    if(isset($row['pfp'])) {
                        echo '<button onclick=myFunction() class=dropbtn><img id=pfp src="data:image/jpg;base64,' . base64_encode($data) . '"/>' . '<p>' . $row['username'] . '</p></button>';
                    } else {

                        echo '<button onclick=myFunction() class=dropbtn>' ?>                    
                            <svg viewbox="0 0 100 100" height="60" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <ellipse stroke="none" ry="49.98086" rx="49.91482" id="svg_2" cy="50.08466" cx="50.0946" fill="#5a5a5a"/>
                                    <text stroke="#000" xml:space="preserve" text-anchor="start" font-family="Helvetica" font-size="70" stroke-width="0" id="svg_3" y="69.420" x="12" fill="#a1a1a1"><?php echo substr( $row['username'], 0, 2  ); ?></text>
                                </g>
                            </svg>
                        <?php '<p>' . $row['username'] . '</p></button>'; 

                    }
                    echo "<div id=myDropdown class=dropdown-content>";
                    echo "<a href=../php/account.php>Account</a>";
                        echo "<a href=../functions/logout.php>Logut</a>";
                            if ($row['admin'] == 1) {
                                echo "<a href=../php/adminPanel.php>admin</a>";
                            }
                    echo "</div>";

        }       echo "</div>";
    } else {

    }
?>

