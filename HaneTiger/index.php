<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HaneTiger</title> <!-- Site's title -->
    <link rel="icon"  href="./favicon.ico"> <!-- Site's icon -->
    <link rel="stylesheet" href="style.css" type="text/css" > <!-- CSS apply -->
    <script src="./script.js"></script> <!-- JavaScript apply -->
</head>
<body >
    <nav>
        <div id="logo" class="element" onclick="window.location.replace('index.php')">H</div>
        <div id="play" class="element" onclick="window.location.replace('./subpages/play.php')">Play</div>
        <div id="settings" class="element" onclick="window.location.replace('./subpages/settings.php')">Settings</div>
        <div id="login" class="element" onclick="window.location.replace('./subpages/login.php')">
            <?php 
                if(isset($_SESSION['user'])) echo $_SESSION['user'];
                else echo "Log in";
            ?>
        </div>
    </nav>
    <main>
        <section id="left">
            
        </section>

        <section id="right">
           
        </section>
    </main>
    <footer>
        <p>&copy;HaneTiger all right reserved</p>
    </footer>
</body>
</html>