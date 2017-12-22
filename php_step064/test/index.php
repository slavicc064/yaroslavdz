<?php require 'header.php'; ?>

<?php /*require_once 'main.php';*/
	/*if ( !empty($_GET['page'])) $param = $_GET['page'];
	else {
		$param = 'home';
	}
	if ($param == 'home') {
		include('main.php');
	} else if ($param == 'service'){
		include('service.php');
	} else if ($param == 'blog'){
		include('blog.php');
	} else if ($param == 'contact'){
		include('contact.php');
	} else include('main.php');*/

	switch ( ($_GET['page'])) {
		case "service" :
			include('service.php');
			break;
		case "blog":
			include('blog.php');
			break;
		case "contact":
			include('contact.php');
			break;
		default:
			include('main.php');
	}

 ?>

<?php require 'footer.php'; ?>