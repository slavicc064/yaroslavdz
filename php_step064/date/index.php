<?php
 echo date('d.m.o H:i:s');
setcookie('cookie_name', 'cookie_value', time() + (86400 * 30), "/");
echo $_COOKIE['cookie_name'];
?>