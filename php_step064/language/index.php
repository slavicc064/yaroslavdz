<?php
    $language =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($language) {
        case "ru" :
            include('ru.php');
            break;
        case "en":
            include('en.php');
            break;
        case "uk":
            include('uk.php');
            break;
        default:
            include('en.php');
    }
?>