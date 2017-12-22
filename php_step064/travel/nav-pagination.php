<?php
	switch ( ($_GET['page'])) {
		case 'index' :
			include('home.php');
			break;
		case "blog" :
			include('blog.php');
			break;
		case "blog-open":
			include('blog-open-post.php');
			break;
		default:
			include('home.php');
	}
?>