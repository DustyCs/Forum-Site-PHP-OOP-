<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/master.css">
</head>
<body>
    <div class="container">
        <div class="top-main">
            <div class="nav-main">
                <div class="nav-tabs site-title">SOMETHING THINK</div>
                <div class="nav-tabs"><a href="#" class="nav-button">HOME</a></div>
                <div class="nav-tabs"><a href="#" class="nav-button">ABOUT</a></div>
                <div class="nav-tabs"><a href="#" class="nav-button">MANIFESTO</a></div>
                <div class="nav-tabs"><a href="#" class="nav-button">STATUS</a></div>
            </div>
            <div class="user-status">
                <div class="status-tab signup-tab">SIGN UP</div>
                <div class="status-tab login-tab">LOGIN</div>
            </div>
        </div>
        <div class="middle-main">
            <div class="middle-container">
                <div class="short-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Ipsum vero quisquam saepe magni quisquam! Iusto, aut in?
                </div>
                <div class="big-text">
                    Not Really a Proper Site to Care
                </div>
            </div>     
        </div>
        <div class="bottom-main">
            <div class="signup">
                <form action="includes/signup.inc.php" method="post" id="signup-form" class="input-form">
                    <h5>SIGN UP</h5>
                    <p id="signup-text">
                        Don't have an account yet? Sign up here!
                    </p>
                    <input type="text" name="username" placeholder="Username">
                    <input type="text" name="password" placeholder="Password">
                    <input type="text" name="reppassword" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit" name="submit" value="SIGN UP"> SIGN UP</button>
                </form>
            </div>
            <div class="login">
                <form action="includes/login.inc.php" method="post" id="login-form" class="input-form">
                    <h5>LOGIN</h3>
                    <p id="login-text">
                        Done with the sign up? Login here!
                    </p>
                    <input type="text" name="username" placeholder="Username">
                    <input type="text" name="password" placeholder="Password">
                    <button type="submit" name="submit" value="LOGIN"> LOGIN </button>
                </form>
            </div>
        </div>
        <footer>
            
        </footer>
    </div>
</body>
</html>