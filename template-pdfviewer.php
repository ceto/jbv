<?php
/*
Template Name: PDF viewer
*/
?>
<main class="main" role="main">	
	<?php while (have_posts()) : the_post(); ?>
		<header class="apartment-hero is_dark">
			<div class="wrapper wrapper-fullwidth">
			</div>
		</header>	
		<div class="wrapper wrapper-fullwidth is_light">
			<div class="page-header">
		  	<h1><?php echo roots_title(); ?><span><a target="_blank" href="<?php echo get_post_meta( $post->ID, 'pdf_url', true );?>">Last ned <i class="ion ion-ios7-download-outline"></i></a></span></h1>
			</div>
			
			<?php if ( get_post_meta( $post->ID, 'pdf_url', true ) ) : ?>
				<div class="singlecolumn">
					
					<iframe class="pdf-viewer" src="http://docs.google.com/viewer?url=<?php echo urlencode(get_post_meta( $post->ID, 'pdf_url', true ) );?>&embedded=true"></iframe>

				</div>
			<?php endif; ?>
			


		</div>
	<?php endwhile; ?>
</main><!-- /.main -->
