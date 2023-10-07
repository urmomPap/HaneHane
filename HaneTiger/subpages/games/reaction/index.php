<?php session_start() ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <script src="reaction.js"></script>
        <script src="../../../script.js"></script>
        <link rel="stylesheet" href="reaction.css">
        <title>Reaction</title>
    </head>
    <body>
        
        <nav>
            <div id="logo" class="element" onclick="window.location.replace('../../../index.php')">H</div>
            <div id="play" class="element" onclick="window.location.replace('../../../subpages/play.php')">Play</div>
            <div id="settings" class="element" onclick="window.location.replace('../../../subpages/settings.php')">Settings</div>
            <div id="login" class="element" onclick="window.location.replace('../subpages/login.php')">
            <?php 
                if(isset($_SESSION['user'])) echo $_SESSION['user'];
                else echo "Log in";
            ?>
        </div>
        </nav>
        <main>
            <section id="left">
                <div id="tekst">
                    Click to start game!
                </div>
                <div id="tekst1">
                  
                </div>
                <div id="gra">
                    <input type="button" onclick="game()" id="buttonek">
                </div>
                <input type="button" value="Reset" onclick="reset()" id="breset"> <br>

                <input type="button" value="Main Menu" onclick="window.location.replace('../../../index.php')" id="breset">


            </section>
            
        </main>
        <footer>
            <p>&copy;HaneTiger all right reserved</p>
        </footer>

        

</body>
</html>