<?php

    function eror() {
        header("Location: logowanie.php");
    }

    $p = mysqli_connect('localhost', 'root', '', 'hanehane');

    $email = $_POST['email'];
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $phaslo = $_POST['phaslo'];

    if($haslo != $phaslo) eror();

    else if(mysqli_num_rows(mysqli_query($p, "SELECT * FROM uzytkownicy WHERE email = \"$email\"")) > 0) eror();
    else if(mysqli_num_rows(mysqli_query($p, "SELECT * FROM uzytkownicy WHERE login = \"$login\"")) > 0) eror();
    else {
        mysqli_query($p, "INSERT INTO uzytkownicy (email, login, haslo) VALUES (\"$email\", \"$login\", \"$haslo\")");
        $p->close();
        setcookie("login", $login, time() + (86400 * 30), "/");
        header('Location: konto.php');
    }

?>