<div class="wrapper wrapper-wide wrapper-page">
	<div class="page-header">
  	<h1><?php echo roots_title(); ?></h1>
	</div>
	<div class="multicolumn">
		<?php the_content(); ?>
	</div>
	<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
</div>