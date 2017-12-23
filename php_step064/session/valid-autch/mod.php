<?php
/*if ( !$_SESSION['firstname'] && !$_SESSION['lastname'] && !$_SESSION['email'] ) {
    header("Location: valid-autch.php");
}*/
//if ( isset( $_POST['ok'] ) ) {
    /*if (preg_match("/^[a-zA-Z0-9]{3,30}$/", $_POST["firstName"])){

    }*/
    /*$first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $email = $_POST['email'];
    if ($first == "first123" && $last == "last123" && $email == "email@email.com" ||
        $first == "first123" && $last == "" && $email == "email@email.com" ||
        $first == "first123" && $last == "last123" && $email == "" ||
        $first == "" && $last == "last123" && $email == "" ||
        $first == "" && $last == "" && $email == "email@email.com" ||
        $first == "first123" && $last == "" && $email == ""
    ) {
        session_start();
        $_SESSION['firstname'] = $first;
        $_SESSION['lastname'] = $last;
        $_SESSION['email'] = $email;
        print_r($_SESSION);
        header("Location: index.php");
    }
    else {
        echo 'error';
        header("Location: index.php");
    }
    if ( $last  == ""){
        echo '<style>[name="lastName" {background-color: red;}]</style>';
    }
    else {
        include 'autch.php';
    }
}*/



?>

<?php
session_start();

$valFname = str_replace(" ", "", $_POST['firstName']);
$valFname2 = '/[a-zA-Z0-9\-\_]{1,50}[@]{1}[a-zA-Z0-9]{2,20}[\.]{1}[a-zA-Z0-9]{2,15}/';

$valLname = str_replace(" ", "", $_POST['lastName']);
$valLname2 = '/[a-zA-Z0-9\-\_]{1,50}[@]{1}[a-zA-Z0-9]{2,20}[\.]{1}[a-zA-Z0-9]{2,15}/';

$valEmail = str_replace(" ", "", $_POST['email']);
$valEmail2 = '/[a-zA-Z0-9\-\_]{1,50}[@]{1}[a-zA-Z0-9]{2,20}[\.]{1}[a-zA-Z0-9]{2,15}/';

if (!preg_match($valFname2, $valFname, $result_first)) {
    if ($_POST['email'] == null) {
        $_SESSION['error_first'] = 'error';
    } else {
        $_SESSION['error_first'] = 'error';
    }
}
if (!preg_match($valLname2, $valLname, $result_last)) {
    if ($_POST['email'] == null) {
        $_SESSION['error_last'] = 'error';
    } else {
        $_SESSION['error_last'] = 'error';
    }
}
if (!preg_match($valEmail2, $valEmail, $result_email)) {
    if ($_POST['email'] == null) {
        $_SESSION['error_email'] = 'error';
    } else {
        $_SESSION['error_email'] = 'error';
    }
}


header('Location: index.php');


