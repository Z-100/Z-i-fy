<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../classes/head.php"); ?>
    <title>Z-I-fy - Login</title>
</head>
<body>
    <nav id = left>
        <div id="left-top">
            <img src="../img/z-i-fy_trans.png" alt="logo" id="logo"">
        </div>

        <div id="nav-mid">
            <ul>
                <li><i class="fa fa-github" style="font-size:24px"></i><a href=https://github.com/Z-100>  Z-100</a></li>  
                <li><i class="fa fa-github" style="font-size:24px"></i><a href="https://github.com/N4choWasTaken">  N4choWasTaken</a></li> 
                <li><i class="fa fa-github" style="font-size:24px"></i><a href="https://github.com/Z-100/Z-i-fy">  GitHub of project</a></li> 
            </ul>         
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
                <input type="submit">
            </form>
        </div>
        
        <div id="register">
            <h1>Register</h1>
            <form id="input" action="../functions/register.php" method="post">
                <input type="text" id="crusername" name="crusername" placeholder="create username">
                <input type="password" id="crpassword" name="crpassword" placeholder="create password">
                <input type="password" id="cfpassword" name="cfpassword" placeholder="confirm password">
                <input type="text" id="token" name="token" placeholder="enter token">
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>