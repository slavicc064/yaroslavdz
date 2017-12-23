<?php session_start();
if ( isset( $_POST['ok'] ) ) {
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $email = $_POST['email'];
	if($first !== "" || $last !== "" || $email !== "" ){
		$_SESSION['firstname'] = $first;
        $_SESSION['lastname'] = $last;
        $_SESSION['email'] = $email;
		header("Location: index.php");
	}
	else {
		header("Location: index.php");
	}
    if ( $last  == ""){
        echo '<style>[name="lastName" {background-color: red;}]</style>';
    }
    else {
        include 'autch.php';
    }
}
?>

<?php
	$_SESSION['error_email'] = '';
	$_SESSION['error_first'] = '';
	$_SESSION['error_last'] = '';
    if ($email !== 'email@email.com') {
        $_SESSION['error_email'] = 'error';
    } else if ($email == '') {
        $_SESSION['error_email'] = 'error';
    } else {
        $_SESSION['error_email'] = '';
    }
	
	if ($first !== 'first123') {
        $_SESSION['error_first'] = 'error';
    } else if ($first == '') {
        $_SESSION['error_first'] = 'error';
    } else {
        $_SESSION['error_first'] = '';
    }
	
	if ($last !== 'last123') {
        $_SESSION['error_last'] = 'error';
    } else if ($last == '') {
        $_SESSION['error_last'] = 'error';
    } else {
        $_SESSION['error_last'] = '';
    }
header('Location: index.php');
?>

