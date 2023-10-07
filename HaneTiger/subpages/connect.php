<?php

    $hostName = 'localhost'; /* MySQL Host name */
    $dbUsername = 'root'; /* MySQL Username */
    $dbUserPassword = ''; /* MySQL Password */
    $dbName = 'hanetiger'; /* MySQL Database name */
    
    if(isset($_POST['email'])) { // Checks if email exists

        $good = true;

        $login = $_POST['login']; 
        $password = $_POST['password'];
        $confPassword = $_POST['confirmPassword'];
        $email = $_POST['email']; //Insert user's values into variables

        if((strlen($login) < 3) || (strlen($login) > 12) || (isset($login) == false)) { // Checks if login is < 3 or > 12
            $good = false;
            
            $_SESSION['e_login'] = "Login must have more than 3 and less than 12 characters";
        }

        if(ctype_alnum($login) == false) { // Checks if login contain special characters
            $good = false;
            
            $_SESSION['e_login'] = "Login can't contain special characers";
        }

        if((strlen($password) < 8) || (strlen($password) > 20) || (isset($password) == false)) { // Checks if password is < 8 or > 20
            $good = false;
            
            $_SESSION['e_password'] = "Password must have more than 8 and less than 20 characters";
        }

        if(($password!=$confPassword) || (isset($confPassword) == false)) { // Checks if passwords match
            $good = false;
            
            $_SESSION['e_confPassword'] = "Passwords do not match";
        }

        if(!isset($_POST['terms'])) { // Checks if Terms are accepted
            $good = false;
            
            $_SESSION['e_terms'] = "Terms and Conditions must be accepted";
        }


        $conn = new mysqli($hostName, $dbUsername, $dbUserPassword, $dbName); // MySQL Database Connection
        $sql = "SELECT * FROM `Accounts` where `login` = '".$login."' and `email` = '".$email."'"; // MySQL Command
        $result = $conn->query($sql); // Result from that command

        if($result->num_rows > 0) { // Checks if account with given login or email already exist
            $good = false;
            

            $_SESSION['e_terms'] = "Terms and Conditions must be accepted";
            $conn->close();
        }

        $secret = "6LfFzEoiAAAAAIxLt6Iwyd7fmDefa1LmlcKNRs44";
        $check = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST['g-recaptcha-response']);
        $answer = json_decode($check); // Captcha config

        if($answer->success == false) { // Checks if captcha is verified
            $good = false;
            $_SESSION['e_captcha'] = "reCaptcha must be verified";
        }

        

        if($good == true) {

            session_start(); // Stars a session
            $res = $conn->query("SELECT id FROM accounts WHERE login = '".$login."' ");
            
            if($conn->connect_error) { // Checks if there's an error

                die('Connection Failed: '.$conn->connect_error);
            } else { // Registration
                $stmt = $conn->prepare("insert into accounts(login, password, email) values (?, ?, ?)");
                $stmt->bind_param("sss", $login, $password, $email);
                $stmt->execute();
                echo "<script> window.location.replace('../subpages/login.php'); alert('Registrated sccessfully') </script>";
                $stmt->close();
            }
        } 

    }
?>