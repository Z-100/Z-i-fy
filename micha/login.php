<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-I-fy</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id = left>
        <div id="top">
            <img src="img/z-i-fy_trans.png" alt="logo" id="logo"">
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
                <form id="input" action="functions/login.php" method="post">
                    <!-- <label for="username">username</label> -->
                    <input type="text" id="username" name="username" placeholder="enter username">
                    <!-- <label for="password">password</label> -->
                    <input type="password" id="password" name="password" placeholder="enter password">
                    <input type="submit">
                </form>
        </div>
            <div id="register">
                    <h1>Register</h1>
                    <form id="input" action="functions/login.php" method="post">
                        <!-- <label for="username">username</label> -->
                        <input type="text" id="crusername" name="crusername" placeholder="create username">
                        <!-- <label for="password">password</label> -->
                        <input type="password" id="crpassword" name="crpassword" placeholder="create password">
                        <input type="password" id="cfpassword" name="cfpassword" placeholder="confirm password">
                        <input type="text" id="token" name="toke " placeholder="enter token">
                        <input type="submit">
                    </form>
            </div>
    </div>
</body>
</html>