<?php global $building; ?>
<?php 
		$ap_args = array(
			'post_type'   => array('apartment'),
			'ignore_sticky_posts' => true,
			'posts_per_page'         => -1,
			'orderby' => 'title',
			'order' => 'ASC',
			//'meta_key' => '_meta_state',
			//'meta_value' => 'fri',
			'tax_query' => array(
				array(
					'taxonomy' => 'object',
					'field'    => 'id',
					'terms'    => array( $building->term_id ),
				),
			),
		);
		$the_aps = new WP_Query( $ap_args );
?>
<div class="wrapper wrapper-narrow is_dark">
	<div class="theader">
		<h3><?php echo $building->name; ?></h3>
		<p><?php echo $the_aps->found_posts; ?> ledig / <?php echo $building->count; ?> hjem</p>
	</div>
	
	<div class="datatable datatable-apartments">
	  <p class="datarow datatable--head">
			<span class="datarow--cell de">Navn</span>
			<span class="datarow--cell">Etasje</span>
			<span class="datarow--cell">BRA</span>
			<span class="datarow--cell">P-rom</span>
			<span class="datarow--cell">Pris / Status</span>
			<span class="datarow--cell stateold">Status</span>
	  </p>
	  <?php while ($the_aps->have_posts()) : $the_aps->the_post(); ?>
	    <?php get_template_part('templates/apartment-datarow'); ?>
	  <?php endwhile; ?>
	</div>
</div>