<main class="main" role="main">	
	
	<header class="home--header is_opaque">
		<div class="wrapper wrapper-fullwidth">
			<div class="home--headhero">
				
			<h1>INFORMASJONSMØTE TORSDAG ONSDAG 12/11 KL. 19.00</h1>
			<h2>Vi ønsker velkommen til informasjonsmøte om dette spennende prosjektet Onsdag 12/11 kl. 19.00 i Notar sine lokaler i Grandfjæra 24B.</h2>			
			</div>
			<div class="home--headcontact">
				<div class="home--headcontact--inner is_dark">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/randi_holligen.jpg" alt="Randi Hollingen">
					<h3>Randi Hollingen</h3>
					<p>Notar Molde</p>
					<p>Daglig&nbsp;leder / Eiendomsmegler&nbsp;MNEF</p>
					<p>Mobil: <a href="tel:481 37 921">481 37 921</a><br/><a href="mailto:randi@notar.no">randi@notar.no</a></p>
					<p><a href="#contactblock" class="btn btn-light">Meld din interesse</a></p>
				</div>
			</div>
				
		</div>
	</header>
	
	<?php 
		$leftpages=new WP_Query( 'page_id=27' );
		$rightpages=new WP_Query( 'page_id=29' );
		$mappages=new WP_Query( 'page_id=39' );
	?>

	<section class="home--redblock is_dark">
		<div class="wrapper wrapper-wide">
<!-- 			<div class="home--redblock--left">
				<?php if ( $leftpages->have_posts() ) : $leftpages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<div class="home--redblock--right">
				<?php if ( $rightpages->have_posts() ) : $rightpages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div> -->
			
			<div class="featimage-row">
				<a href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_innside_002-1920x1080.jpg" class="popup-zoom">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_innside_002-640x360.jpg" alt="">
				</a>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_ytre_006-1920x1080.jpg" class="popup-zoom">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_ytre_006-640x360.jpg" alt="">
				</a>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_innside_006-1920x1080.jpg" class="popup-zoom">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_innside_006-640x360.jpg" alt="">
				</a>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_ytre_007-1920x1080.jpg" class="popup-zoom">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kicsinegy/jrd_ytre_007-640x360.jpg" alt="">
				</a>
			</div>

		</div>
	</section>

	<section class="home--videoblock is_light">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header">
			  <h2>Jordbærvegen Film<span>Press play to start video</span></h2>
			</div>			

			<iframe width="1280" height="720" src="//www.youtube.com/embed/tFUwCqyUSsE?rel=0&amp;controls=1&amp;showinfo=0&amp;feature=player_detailpage&amp;VQ=large" frameborder="0" allowfullscreen></iframe>
		</div>
	</section>

	<section class="home--chooserblock is_dark">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header inverse">
			  <h2>Finn din bolig<span>Dra musepekeren over bygget for å velge leilighet</span></h2>
			</div>			

			<?php get_template_part('templates/chooser','start'); ?>

		</div>
	</section>

	<?php 
		$sl_args = array(
			'post_type'   => array('slide'),
			'ignore_sticky_posts' => true,
			'posts_per_page'         => -1,
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$the_slides = new WP_Query( $sl_args );
	?>
	<section class="home--bilderblock is_light">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header"><h2>Bilder</h2></div>
				<div class="master-slider ms-skin-default" id="masterslider">
					<?php while ( $the_slides->have_posts() ) : $the_slides->the_post(); ?>
						<?php 
							if (has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($image_id, 'tiny169', true);
								$image_url_array = wp_get_attachment_image_src($image_id, 'full169', true);
								$thumb_url = $thumb_url_array[0];
								$image_url = $image_url_array[0];
						?>
						<div class="ms-slide">
		            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/masterslider/blank.gif" data-src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>"/>
		            <img src="<?php echo $thumb_url; ?>" width="160" height="90" alt="<?php the_title(); ?>" class="ms-thumb"/>
		            <div class="ms-info"><?php the_title(); ?></div>
		        </div>
					<?php  } endwhile; ?>	
				</div>
		</div>
	</section>

	<section class="home--mapblock is_light">
		<div class="wrapper wrapper-fullwidth map-wrapper">
			<div class="home--mapblock--text">
				<?php if ( $mappages->have_posts() ) : $mappages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<div id="map-canvas"></div>
		</div>
	</section>

	





</main><!-- /.main -->