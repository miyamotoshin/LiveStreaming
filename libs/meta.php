<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="format-detection" content="telephone=no">


<!-- Viewport
======================================================================-->
<?php
	require_once 'ua.class.php';
	$ua = new UserAgent();
	# タブレット用の固定Viewport設定
	# タブレットで閲覧した際は、$widthに設定したwidthで表示される
	if($ua->set() === 'tablet') :
		$width = '1124px';
?>

<meta content="width=<?php echo $width; ?>" name="viewport">

<?php
	# スマホ端末用の固定Viewport設定
	elseif($ua->set() === 'mobile') :
		$width = '375px';
?>

<meta content="width=<?php echo $width; ?>" name="viewport">

<?php else: ?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<?php endif; ?>


<!-- SEO
======================================================================-->
<?php
	# wordpressを利用しない静的のmeta設定用
	include(APP_PATH.'libs/argument.php');

	# wordpressを利用する場合のカスタムフィールド値適応用
	##### 未実装 #####

?>
<title><?php echo $seo_title?></title>
<meta name="description" content="<?php echo $seo_description; ?>">
<meta name="keywords" content="<?php echo $seo_keyword; ?>">


<!-- Facebook
======================================================================-->
<meta property="og:title" content="<?php echo $seo_title?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo 'https://'.$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"].$_SERVER["QUERY_STRING"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="">
<meta property="og:description" content="<?php echo $seo_description; ?>" />
<meta property="fb:app_id" content="">


<!-- CSS
======================================================================-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link href="<?php echo APP_URL;?>css/style.css" rel="stylesheet">


<!-- Favicon
======================================================================-->
<link rel="icon" href="<?php echo APP_URL;?>images/favicons/favicon.ico">
<link rel="shortcut icon" href="<?php echo APP_URL;?>images/favicons/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo APP_URL;?>images/favicons/apple-touch-icon.png">


<!-- IE Hack
======================================================================-->
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
  (function(d) {
    var config = {
      kitId: 'czu6nta',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
