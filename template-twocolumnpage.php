<?php
/*
Template Name: Two column page
*/
?>
<main class="main" role="main">	
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</main><!-- /.main -->