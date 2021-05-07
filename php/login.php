<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.html"); ?>
    <title>Z-I-fy - Login</title>
</head>
<body>
    <nav id = left>
        <div id="left-top">
            <img src="../img/z-i-fy_trans.png" alt="logo" id="logo">
        </div>

        <div id="nav-mid">
            <?php require_once("../classes/githublinks.html"); ?>       
        </div> 
    </nav>

    <div id="mainlogin">
        <div id="login">
            <h1>Login</h1>
            <div style="color: aliceblue;">
                <?php echo "<p>" . @$_GET['message'] . "</p>"; ?>
            </div>
            <form id="input" action="../functions/login.php" method="post">
                <input type="text" id="username" name="username" placeholder="enter username">
                <input type="password" id="password" name="password" placeholder="enter password">
                <input type="submit" value="Log in">
            </form>
        </div>
        
        <div id="register">
            <h1>Register</h1>
            <div style="color: aliceblue;">
                <?php echo "<p>" . @$_GET['message'] . "</p>"; ?>
            </div>
            <form id="input" action="../functions/register.php" method="post">
                <input type="text" id="crusername" name="crusername" placeholder="create username">
                <input type="password" id="crpassword" name="crpassword" placeholder="create password">
                <input type="password" id="cfpassword" name="cfpassword" placeholder="confirm password">
                <input type="text" id="token" name="token" placeholder="enter token">
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>