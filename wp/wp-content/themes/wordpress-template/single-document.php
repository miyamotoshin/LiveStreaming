<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';
$queried_object = get_queried_object();

$this_post_terms = get_the_terms($queried_object->ID, 'documentcat');

# 親カテゴリ情報を取得
$parent_term_id = 0;
$parent_name = '';
$parent_slug = '';
for ($i=0; $i < count($this_post_terms); $i++) {
	if($this_post_terms[$i]->parent == 0) {
		$parent_name = $this_post_terms[$i]->name;
		$parent_slug = $this_post_terms[$i]->slug;
		$parent_term_id = $this_post_terms[$i]->term_id;
		break;
	}
}

$documentcat_terms = get_terms('documentcat', ['parent' => $parent_term_id]);

?>
<link href='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/themes/prism.min.css' rel='stylesheet'/>
<link href='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-numbers/prism-line-numbers.min.css' rel='stylesheet'/>
<link href='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-highlight/prism-line-highlight.min.css' rel='stylesheet'/>

</head>

<body class="">


<!-- Header
======================================================================-->
<?php include($path.'/libs/header.php'); ?>


<div class="breadcrumb">
  <div class="inner">
    <ul>
      <li><a href="../../">ホーム</a></li>
      <li><a href="../../documentcat/<?php echo $parent_slug; ?>"><?php echo $parent_name; ?></a></li>
			<li><span><?php the_title(); ?></span></li>
    </ul>
  </div>
</div>


<!-- Main Content
======================================================================-->
<main>
	<section class="document-detail">
		<div class="inner">
			<div class="document-detail__r">
				<h1><?php the_title(); ?></h1>
				<div class="document-detail__r--contents">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="document-detail__l">
				<h2><?php echo $parent_name; ?></h2>
				<?php
					for ($i=0; $i < count($documentcat_terms); $i++) {
				?>

				<div class="document-detail__l--box">
					<h3><?php echo $documentcat_terms[$i]->name; ?></h3>

				<?php
					$args = array(
						'post_type' => array(
							'document'
						),
						'tax_query' => array(
							array(
								'taxonomy' => 'documentcat',
								'field'    => 'slug',
								'terms'    => $documentcat_terms[$i]->slug,
							),
						),
						'orderby' => 'menu_order',
						'order' => 'ASC',
					);


					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) :
						echo '<ul>';
						while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
						<li><a href="<?php the_permalink(); ?>">- <?php the_title(); ?></a></li>
				<?php
						endwhile;
						echo '</ul>';
					endif;
				?>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>


</main>


<!-- Footer
======================================================================-->
<?php include($path.'/libs/footer.php'); ?>

</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/prism.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-numbers/prism-line-numbers.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-highlight/prism-line-highlight.min.js'></script>

<!-- Scripts
======================================================================-->
<?php include $path . '/libs/scripts.php';?>
<script>
	$("pre code").each(function(){
		var $this=$(this);
		var text = $this.parent().html().replace(/^\s+|\s+$/g,'').split("<").join("&lt;").split(">").join("&gt;");
	})
</script>
</body>
</html>
