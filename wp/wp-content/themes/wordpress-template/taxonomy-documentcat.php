<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';
$queried_object = get_queried_object();

$documentcat_terms = get_terms('documentcat', ['parent' => $queried_object->term_id]);

?>
</head>

<body class="">


<!-- Header
======================================================================-->
<?php include($path.'/libs/header.php'); ?>


<!-- Main Content
======================================================================-->
<main>
	<section class="document-title">
		<div class="document-title__inner inner-small">
			<h1><?php echo $queried_object->name; ?></h1>
			<p><?php echo $queried_object->description; ?></p>
		</div>
	</section>

	<section class="archive">
		<div class="inner-small">

			<?php

				for ($i=0; $i < count($documentcat_terms); $i++) {
			?>
			<div class="archive__header">
				<h2><?php echo $documentcat_terms[$i]->name; ?></h2>
				<a href="javascript:void(0);">
					<span>
						<img src="../../images/common/ico_search.svg" alt="">
					</span>
				</a>
			</div>

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
				echo '<div class="archive__body">';
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<a href="<?php the_permalink(); ?>">
				<strong><?php the_title(); ?></strong>
				<small><?php echo get_field('一覧の説明テキスト'); ?></small>
				<svg xmlns="http://www.w3.org/2000/svg" width="36.848" height="36.848" viewBox="0 0 36.848 36.848"><g id="streamline-icon-interface-arrows-right-circle-1_30x30" data-name="streamline-icon-interface-arrows-right-circle-1@30x30" transform="translate(2 2)"><path id="path26" data-name="path26" d="M8.571,15H19.079" transform="translate(2.599 1.424)" fill="none" stroke="#efefef" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><path id="path27" data-name="path27" d="M18.214,11.786l5.254,5.253-5.254,5.253" transform="translate(-1.732 -0.615)" fill="none" stroke="#efefef" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><path id="path28" data-name="path28" d="M1.071,17.5A16.424,16.424,0,1,0,17.5,1.071,16.424,16.424,0,0,0,1.071,17.5Z" transform="translate(-1.071 -1.071)" fill="none" stroke="#efefef" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g>
				</svg>
			</a>
			<?php
				endwhile;
				echo '</div>';
			endif;
			?>
			<?php
				}
			?>

		</div>
	</section>

</main>


<!-- Footer
======================================================================-->
<?php include($path.'/libs/footer.php'); ?>

</div>



<!-- Scripts
======================================================================-->
<?php include $path . '/libs/scripts.php';?>
</body>
</html>
