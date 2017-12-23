<?php
    session_start();
    if ( isset( $_SESSION['login'] ) ){
        include 'login.php';
    }
    else if ( isset( $_COOKIE['login123'] ) ){
        include 'login.php';
    }
    else {
        include 'reg.php';
    }
?>