<?php
$pagename = str_replace(array('/', '.php', '?s='), '', $_SERVER['REQUEST_URI']);
$pagename = $pagename ? $pagename : 'default';
$pagename = str_replace('', '', $pagename);

switch ($pagename) {
	case '':
		if(!isset($seo_title)) $seo_title = '';
		if(!isset($seo_description)) $seo_description = '';
		if(!isset($seo_keyword)) $seo_keyword = '';
	break;
	default:
		if(!isset($seo_title)) $seo_title = 'Default';
		if(!isset($seo_description)) $seo_description = '';
		if(!isset($seo_keyword)) $seo_keyword = '';
}
?>
