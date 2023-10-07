<?php session_start() ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <script src="tictactoe.js"></script>
        <script src="../../../script.js"></script>
        <link rel="stylesheet" href="tictactoe.css">
        <title>Tic Tac Toe</title>
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
                
        
                <div class="plansza">

                <input class="pole" id="button0" type="button" onclick="ruch(0);"> 
                <input class="pole" id="button1" type="button" onclick="ruch(1);">
                <input class="pole" id="button2" type="button" onclick="ruch(2);"> <br>
                <input class="pole" id="button3" type="button" onclick="ruch(3);">
                <input class="pole" id="button4" type="button" onclick="ruch(4);">
                <input class="pole" id="button5" type="button" onclick="ruch(5);"> <br>
                <input class="pole" id="button6" type="button" onclick="ruch(6);">
                <input class="pole" id="button7" type="button" onclick="ruch(7);">
                <input class="pole" id="button8" type="button" onclick="ruch(8);">

                </div>

                

                
                <div id="wynik">...</div>

                <input type="button" value="Reset" onclick="reset()" id="breset"> <br>

                <input type="button" value="Main Menu" onclick="window.location.replace('../../../index.php')" id="breset">

            </section>
            
        </main>
        <footer>
            <p>&copy;HaneTiger all right reserved</p>
        </footer>

        

</body>
</html>