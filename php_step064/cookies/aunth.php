<?php

	$array = ['login' => '1234'];
	
	foreach ( $array as $key => $value ) {
        $log = trim( strip_tags( $_POST['log'] ) );
        $pass = trim( strip_tags( $_POST['pass'] ) );
        if ( $key == $log && $value == $pass ) {
            setcookie( 'autorize', 'user', time() + (86400 * 30), "/" );
            header('Location: index.php');
        }
        else {
            setcookie( 'error', 'user', time() + (86400 * 30), "/" );
            header('Location: index.php');
        }
	}

?>