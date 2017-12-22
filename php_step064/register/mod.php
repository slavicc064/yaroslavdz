<?php
function mod($log, $pass){
	echo $log;
}
mod($_POST['login'], $_POST['pass']);	
	//header('Location: index.php');
?>