<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$smarty->assign('siteName', $title);
$smarty->assign('siteLink', $sitelink);
$smarty->assign('cacheCheck', $cacheCheck);

$smarty->display('includes/head.tpl');

// header
$smarty->display('includes/header.tpl');
$url = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($url) {
    case 'home':
		$smarty->assign('active', "home");
		$smarty->display('includes/menu.tpl');
		require_once 'model/getpagination.php';
		$smarty->assign('page', $page);
        require_once 'model/getarticles.php';
		$smarty->assign('pagenum', $pages);
		$smarty->assign('article', $article);
		$smarty->assign('latest', $latest);
		
		//rewrite to smarty
        $smarty->display('home.tpl');
        break;
		
    case 'news':
		$smarty->assign('active', "home");
		$smarty->display('includes/menu.tpl');
		require_once 'model/getnewsid.php';
		$smarty->assign('newsinfo', $newsInfo);
        //rewrite to smarty template
        $smarty->display('news.tpl');
		
        break;
    case 'about':
		$smarty->assign('active', "about");
		$smarty->display('includes/menu.tpl');
        //use 'display' to show a template
        $smarty->display('about.tpl');
        break;
    case 'contact':
		$smarty->assign('active', "contact");
		$smarty->display('includes/menu.tpl');
        //contact
		$smarty->display('contact.tpl');
        break;
	case 'videos':
		$smarty->assign('active', "topvideos");
		$smarty->display('includes/menu.tpl');
        require_once 'model/gettopvideos.php';
		$smarty->assign('topvideos', $topVideos);
		$smarty->display('videos.tpl');
	break;
	case 'disclaimer':
		$smarty->assign('active', false);
		$smarty->display('includes/menu.tpl');
		$smarty->display('disclaimer.tpl');
	break;
	
}

// footer
$smarty->assign('footer', $footer);
$smarty->display('includes/footer.tpl');

?>