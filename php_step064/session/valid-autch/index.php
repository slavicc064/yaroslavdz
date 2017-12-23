<?php
    session_start();
    if ( $_SESSION['firstname'] == 'first123' && $_SESSION['lastname'] == 'last123' && $_SESSION['email'] == 'email@email.com' ) {
        include 'home.php';
    }
    else {
        include 'autch.php';
    }
	echo '<pre>';
	print_r($_SESSION);
?>

