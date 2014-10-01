<main class="main" role="main">	
	
	<section class="home--header">
		<div class="wrapper wrapper-fullwidth">
			
		</div>
	</section>
	
	<?php 
		$leftpages=new WP_Query( 'page_id=27' );
		$rightpages=new WP_Query( 'page_id=29' );
		$mappages=new WP_Query( 'page_id=39' );
	?>

	<section class="home--redblock">
		<div class="wrapper wrapper-wide">
			<div class="home--redblock--left">
				<?php if ( $leftpages->have_posts() ) : $leftpages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<div class="home--redblock--right">
				<?php if ( $rightpages->have_posts() ) : $rightpages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="home--mapblock">
		<div class="wrapper wrapper-wide">
			<div class="home--mapblock--text">
				<?php if ( $mappages->have_posts() ) : $mappages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="home--bilderblock">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header"><h2>Bilder</h2></div>
		
		</div>
	</section>


	<section class="home--chooserblock">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header inverse">
			  <h2>Finn din bolig</h2>
			</div>
		
		</div>
	</section>

</main><!-- /.main -->
