<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';

if (have_posts()):
while (have_posts()): the_post();
$thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>
</head>

<body class="daily sub-whole">


<!-- Header
======================================================================-->
<?php include $path . '/libs/header.php';?>



<!-- Wrap
======================================================================-->
<div class="wrap">



<!-- Main Content
======================================================================-->
<main>

</main>



<!-- Footer
======================================================================-->
<?php include $path . '/libs/footer.php';?>



</div>



<!-- Scripts
======================================================================-->
<?php include $path . '/libs/scripts.php';?>


<?php endwhile;?>
<?php endif;?>
</body>
</html>
