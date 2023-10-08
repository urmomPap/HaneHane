<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <div id="nav">
        <table id="navtable">
            <tr>
                <td><a href="menu.php">Menu</a></td>
                <td><a href="index.php">HT</a></td>
                <td><a href="konto.php"><?php 
                    if(isset($_COOKIE["login"])) echo $_COOKIE["login"];
                    else echo "Zaloguj";
                    ?></a></td>
            </tr>
        </table>
    </div>
    <div id="sekcje">
        <div id="lewy">
        <button class="input-submit" onclick="window.location.replace('gry/kolkoikrzyzyk.php')">Kółko i krzyżyk</button><br>
        <button class="input-submit" onclick="window.location.replace('gry/cps.php')">CPS</button><br>
        <button class="input-submit" onclick="window.location.replace('gry/memory.php')">Memory</button><br>
        <button class="input-submit" onclick="window.location.replace('gry/reakcje.php')">Reakcje</button><br>
        <button class="input-submit" onclick="window.location.replace('gry/wisielec.php')">Wisielec</button><br>
        </div>
        <div id="prawy"></div>
    </div>
    
    <div id="footer">&copy;HaneHane wszelkie prawa zastrzeżone</div>
</body>
</html>