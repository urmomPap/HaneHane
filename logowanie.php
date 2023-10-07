<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
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
        <div id="lewy"><h3>Logowanie</h3>
            <form action="logowanie_skrypt.php" method="POST">
                Login <br>
                <input type="text" name="login" id="login" class="input-text" required><br>
                Hasło <br>
                <input type="password" name="haslo" id="haslo" class="input-text" required><br>
                <input type="submit" value="Zaloguj" class="input-submit">
            </form>
        </div>
        <div id="prawy"><h3>Rejestracja</h3>
            <form action="rejestracja_skrypt.php" method="POST">
                Email <br> <input type="text" name="email" id="email" class="input-text" required> <br>
                Login <br><input type="text" name="login" id="login" class="input-text" required> <br>
                Hasło <br><input type="password" name="haslo" id="haslo" class="input-text" required><br>
                Powtórz hasło<br> <input type="password" name="phaslo" id="phaslo" class="input-text" required><br>
                <input type="submit" value="Zarejestruj" class="input-submit">

            </form>
        </div>
    </div>
    
    <div id="footer">&copy;HaneHane wszelkie prawa zastrzeżone</div>
</body>
</html>