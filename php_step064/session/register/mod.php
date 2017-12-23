<?php
/*if ( !$_SESSION['firstname'] && !$_SESSION['lastname'] && !$_SESSION['email'] ) {
    header("Location: valid-autch.php");
}*/
if ( isset( $_POST['checkbox'] ) ){
    if (isset($_POST['register'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        if ($login == "login123" && $pass == "123pass") {
            setcookie($login, $pass, time() + (86400 * 30), "/");
            print_r($_COOKIE);
            header("Location: index.php");
        } else {
            echo 'error';
            // header("Location: index.php");
        }
    }
}
else {
    if (isset($_POST['register'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        if ($login == "login123" && $pass == "123pass") {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            print_r($_SESSION);
            header("Location: index.php");
        } else {
            echo 'error';
            // header("Location: index.php");
        }
    }
}
    /*if ( isset( $_POST['register'] ) ) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        if ( isset( $_POST['checkbox'] ) ) {
            if ($login == "login123" && $pass == "123pass") {
                setcookie($login, $pass, time() + (86400 * 30), "/");
                print_r($_COOKIE);
                header("Location: index.php");
            } else {
                echo 'error';
                // header("Location: index.php");
            }
        }
        else {
            if ($login == "login123" && $pass == "123pass") {
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['pass'] = $pass;
                print_r($_SESSION);
                header("Location: index.php");
            } else {
                echo 'error';
                // header("Location: index.php");
            }
        }
    }*/

?>


