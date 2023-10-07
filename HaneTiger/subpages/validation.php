<?php
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $connect = new mysqli('localhost', 'root', '', 'hanetiger');
    $result = $connect->query("select * from accounts where login = '$login' and password = '$password'");
    $count=$result->num_rows;

    if(empty($count)){
        header('Location: login.php');
    }       
    else{
        $_SESSION['user'] = $login;
        header('Location: profile.php');
    }
?>