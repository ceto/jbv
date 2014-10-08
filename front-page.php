<main class="main" role="main">	
	
	<header class="home--header">
		<div class="wrapper wrapper-fullwidth">
			<div class="home--headhero">
				<h1>27 Selveierleiligheter komer for salg i oktober.</h1>
				<img class="redlogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_red.png" alt="JORDBÆRVEGEN" class="watermark">
			
			</div>
			<div class="home--headcontact">
				<div class="home--headcontact--inner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/randi_holligen.jpg" alt="Randi Holligen">
					<h3>Randi Holligen</h3>
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
		<div class="wrapper wrapper-fullwidth map-wrapper">
			
						
			<div class="home--mapblock--text">
				<?php if ( $mappages->have_posts() ) : $mappages->the_post(); ?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>

			<div id="map-canvas"></div>


		</div>
	</section>

	
	<?php 
		$sl_args = array(
			'post_type'   => array('slide'),
			'ignore_sticky_posts' => true,
			'posts_per_page'         => -1,
		);
		$the_slides = new WP_Query( $sl_args );
	?>
	<section class="home--bilderblock">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header"><h2>Bilder</h2></div>
				<div class="master-slider ms-skin-default" id="masterslider">
					<?php while ( $the_slides->have_posts() ) : $the_slides->the_post(); ?>
						<?php 
							if (has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($image_id, 'tiny169', true);
								$image_url_array = wp_get_attachment_image_src($image_id, 'large169', true);
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


	<section class="home--chooserblock">
		<div class="wrapper wrapper-fullwidth">
			<div class="page-header inverse">
			  <h2>Finn din bolig</h2>
			</div>
			

			<?php 
				$builds_args = array(
					'hide_empty' => false 
				);
				$the_buildings = get_terms('object', $builds_args );
			?>
			<div class="thechooser">
				<div class="visual-chooser visual-chooser-starter">
					
				</div>
				
				<div class="wrapper wrapper-extranarrow">
		      <div class="datatable datatable-buildins">
		      	<p class="datarow datatable--head">
		          <span class="datarow--cell">Navn</span>
		          <span class="datarow--cell">Floor</span>
		          <span class="datarow--cell">Fri leilighets</span>
		        </p>
		        <?php foreach ($the_buildings as $building) { ?>
		          <?php get_template_part('templates/building-datarow'); ?>
		        <?php } ?>
		      </div>
		    </div>
			
			</div>

		</div>
	</section>

</main><!-- /.main -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
	var map;
	function initialize() {
		var mapOptions = {
			styles: [
			  {
			    "stylers": [
			      { "saturation": -100 },
			      { "gamma": 1.94 }
			    ]
			  }
			],
			zoom: 8,
			center: new google.maps.LatLng(-34.397, 150.644)
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),
	  mapOptions);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
