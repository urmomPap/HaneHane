<?php session_start();
if(isset($_SESSION['user'])) header('location: profile.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - HT</title> <!-- Site's title -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico"> <!-- Site's icon -->
    <link rel="stylesheet" href="../style.css"> <!-- CSS apply -->
    <script src="../script.js"></script> <!-- JavaScript apply -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        input[type=button] {
            color: white;
            font-family: 'Pixeled';
            padding-bottom: 5px;
            background-color: #403F4C;
            width: 15%;
            height: 40px;
            font-size: 10px;
            border: none;
            border-bottom: 2px solid #121420;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav>
        <div id="logo" class="element" onclick="window.location.replace('../index.php')">H</div>
        <div id="play" class="element" onclick="window.location.replace('../subpages/play.php')">Play</div>
        <div id="settings" class="element" onclick="window.location.replace('../subpages/settings.php')">Settings</div>
        <div id="login" class="element" onclick="window.location.replace('../subpages/login.php')">
            <?php 
                if(isset($_SESSION['user'])) echo $_SESSION['user'];
                else echo "Log in";
            ?>
        </div>
    </nav>
    <main>
        <section id="left" style="font-size:20px;">
            <form action="validation.php" method="post">
                <h1>Log in</h1>
                Login: <input type="text" name="login" id="llogin" required> <br>
                Password: <input type="password" name="password" id="lpassword" required> 
                <h1><input type="submit" value="Login"></h1>
                
            </form>
            
        </section>

        <section id="right">
            <form action="connect.php" method="post">
                <h1>Register</h1>
                Login: <input type="text" name="login" id="login" required> <br>
                E-mail: <input type="email" name="email" id="email" required> <br>
                Password: <input type="password" name="password" id="password" required> <br>
                Confirm Password: <input type="password" name="confirmPassword" id="confPassword" required> 
                <div id="terms" style="font-size:10px;"><input type="checkbox" name="terms" required> Agree to Terms and Conditions</div> 
                <div class="g-recaptcha" data-sitekey="6LfFzEoiAAAAAAA-ODNABx9kB-L9ipJYWr0WYyvv"></div> <br>
                <input type="submit" value="Register">
                 
            </form>
            
        </section>
        
    </main>
    <footer>
        <p>&copy;HaneTiger all right reserved</p>
    </footer>
</body>
</html>