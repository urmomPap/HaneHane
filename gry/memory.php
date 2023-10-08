<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js"></script>
</head>
<body>
    <div id="nav">
        <table id="navtable">
            <tr>
                <td><a href="../menu.php">Menu</a></td>
                <td><a href="../index.php">HT</a></td>
                <td><a href="../konto.php"><?php 
                    if(isset($_COOKIE["login"])) echo $_COOKIE["login"];
                    else echo "Zaloguj";
                    ?></a></td>
            </tr>
        </table>
    </div>
    <div id="sekcje">
        <div id="lewy">Memory</div>
        <div id="prawy"></div>
    </div>
    
    <div id="footer">&copy;HaneHane wszelkie prawa zastrzeżone</div>
</body>
</html>