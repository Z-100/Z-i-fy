<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting</title>
</head>
<body>
    <?php
        require_once("../config.php");

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username, password
                FROM users
                WHERE username = '$username' AND password = '$password'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($username = $row['username'] && $password = $row['password']) {
                    echo "<br><br><br>sugses<br><br><br>";
                } else {
                    echo "<br><br><br>not sugses<br><br><br>";
                }
            }
        } elseif (mysqli_num_rows($result) == 0) {
            echo "FUCK";
        }
    ?>
</body>
</html>