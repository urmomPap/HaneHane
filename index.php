<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="nav">
        <table>
            <tr>
                <td><a href="#">Menu</a></td>
                <td><a href="#">HT</a></td>
                <td><a href="#"><?php 
                    session_start();
                    if(isset($_SESSION["user"])) echo $_SESSION["user"];
                    else echo "Zaloguj";
                    ?></a></td>
            </tr>
        </table>
    </div>
    <div id="sekcje">
        <div id="lewy"></div>
        <div id="prawy"></div>
    </div>
    
    <div id="footer">&copy;HaneHane wszelkie prawa zastrzeżone</div>
</body>
</html>