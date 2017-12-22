<head>
    <style>
        table,
        td {
            border: 1px solid black;
        }
        table {
            float: left;
        }
    </style>
</head>
<?php
    echo '<table cellpadding="10">' ;
    echo '<tr><th>'.'USER'.'</th><tr>';
    echo '<tr><td>'.'HTTP_ACCEPT'.'</td><td>' . $_SERVER['HTTP_ACCEPT'] . '</td></tr>';
    /*echo '<tr><td>'.'HTTP_ACCEPT_CHARSET'.'</td><td>' . $_SERVER['HTTP_ACCEPT_CHARSET'] . '</td></tr>';*/
    echo '<tr><td>'.'HTTP_ACCEPT_ENCODING'.'</td><td>' . $_SERVER['HTTP_ACCEPT_ENCODING'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_ACCEPT_LANGUAGE'.'</td><td>' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_CONNECTION'.'</td><td>' . $_SERVER['HTTP_CONNECTION'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_USER_AGENT'.'</td><td>' . $_SERVER['HTTP_USER_AGENT'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_UPGRADE_INSECURE_REQUESTS'.'</td><td>' . $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_CACHE_CONTROL'.'</td><td>' . $_SERVER['HTTP_CACHE_CONTROL'] . '</td></tr>';
    echo '<tr><td>'.'UNIQUE_ID'.'</td><td>' . $_SERVER['UNIQUE_ID'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_CONNECTION'.'</td><td>' . $_SERVER['HTTP_CONNECTION'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_CONNECTION'.'</td><td>' . $_SERVER['HTTP_CONNECTION'] . '</td></tr>';
    echo '<tr><td>'.'HTTP_CONNECTION'.'</td><td>' . $_SERVER['HTTP_CONNECTION'] . '</td></tr>';
    echo '</table>' ;

    echo '<table cellpadding="10">' ;
    echo '<tr><th>'.'SERVER'.'</th><tr>';
    echo '<tr><td>'.'SERVER_ADDR'.'</td><td>' . $_SERVER['SERVER_ADDR'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_NAME'.'</td><td>' . $_SERVER['SERVER_NAME'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_SOFTWARE'.'</td><td>' . $_SERVER['SERVER_SOFTWARE'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_PROTOCOL'.'</td><td>' . $_SERVER['SERVER_PROTOCOL'] . '</td></tr>';
    echo '<tr><td>'.'SCRIPT_FILENAME'.'</td><td>' . $_SERVER['SCRIPT_FILENAME'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_ADMIN'.'</td><td>' . $_SERVER['SERVER_ADMIN'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_PORT'.'</td><td>' . $_SERVER['SERVER_PORT'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_SIGNATURE'.'</td><td>' . $_SERVER['SERVER_SIGNATURE'] . '</td></tr>';
    echo '<tr><td>'.'REMOTE_PORT'.'</td><td>' . $_SERVER['REMOTE_PORT'] . '</td></tr>';
    echo '<tr><td>'.'GATEWAY_INTERFACE'.'</td><td>' . $_SERVER['GATEWAY_INTERFACE'] . '</td></tr>';
    echo '<tr><td>'.'SERVER_PROTOCOL'.'</td><td>' . $_SERVER['SERVER_PROTOCOL'] . '</td></tr>';
    echo '<tr><td>'.'REQUEST_METHOD'.'</td><td>' . $_SERVER['REQUEST_METHOD'] . '</td></tr>';
    echo '<tr><td>'.'QUERY_STRING'.'</td><td>' . $_SERVER['QUERY_STRING'] . '</td></tr>';
    echo '<tr><td>'.'REQUEST_URI'.'</td><td>' . $_SERVER['REQUEST_URI'] . '</td></tr>';
    echo '<tr><td>'.'SCRIPT_NAME'.'</td><td>' . $_SERVER['SCRIPT_NAME'] . '</td></tr>';
    echo '<tr><td>'.'PHP_SELF'.'</td><td>' . $_SERVER['PHP_SELF'] . '</td></tr>';
    echo '<tr><td>'.'REQUEST_TIME_FLOAT'.'</td><td>' . $_SERVER['REQUEST_TIME_FLOAT'] . '</td></tr>';
    echo '<tr><td>'.'REQUEST_TIME'.'</td><td>' . $_SERVER['REQUEST_TIME'] . '</td></tr>';
    echo '<tr><td>'.'PATH'.'</td><td>' . $_SERVER['PATH'] . '</td></tr>';
    echo '<tr><td>'.'LD_LIBRARY_PATH'.'</td><td>' . $_SERVER['LD_LIBRARY_PATH'] . '</td></tr>';
    echo '<tr><td>'.'REMOTE_ADDR'.'</td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';
    echo '<tr><td>'.'DOCUMENT_ROOT'.'</td><td>' . $_SERVER['DOCUMENT_ROOT'] . '</td></tr>';
    echo '<tr><td>'.'CONTEXT_PREFIX'.'</td><td>' . $_SERVER['CONTEXT_PREFIX'] . '</td></tr>';
    echo '<tr><td>'.'CONTEXT_DOCUMENT_ROOT'.'</td><td>' . $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '</td></tr>';
    echo '</table>' ;
?>
