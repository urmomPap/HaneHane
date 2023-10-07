<?php

    function eror() {
        header('Location: logowanie.php');
    }

    $p = mysqli_connect('localhost', 'root', '', 'hanehane');

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if(mysqli_num_rows(mysqli_query($p, "SELECT * FROM uzytkownicy where login = \"$login\"")) < 1) eror();
    else if($haslo != mysqli_query($p, "SELECT * FROM uzytkownicy where login = \"$login\"")->fetch_assoc()['haslo']) eror();
    else {
        setcookie("login", $login, time() + (86400 * 30), "/");
        header('Location: index.php');
    };

?>