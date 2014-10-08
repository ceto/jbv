<?php global $building; ?>
<p class="datarow">
	<a class="datarow--link " href="<?php echo get_term_link( $building ); ?>" tiltle="<?php echo $building->name; ?>">
		<span class="datarow--cell">
			<?php echo $building->name; ?>
		</span>
		
		<span class="datarow--cell">
			<?php echo get_tax_meta($building->term_id,'_meta_floors'); ?> floor
		</span>
		
		<span class="datarow--cell">
		<?php echo $building->count; ?>
		</span>
		

	</a>
</p>