<main class="main" role="main">	
	
	<header class="home--header">
		<div class="wrapper wrapper-wide">
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
			
			<div id="map-canvas"></div>
			
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
