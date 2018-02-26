<?php

$uri = explode("/",$_SERVER['REQUEST_URI']);

switch ($uri[2]) {
	case '':
	case 'blog':
		require __DIR__ . '/shablon/blog.php';
	break;
	
	case 'work':
		require __DIR__ . '/shablon/work.php';
	break;

	case 'main':
		require __DIR__ . '/shablon/news.php';
	break;

	case 'o_nas':
		require __DIR__ . '/shablon/o_nas.php';
	break;

	default:
		
	break;
}

?>