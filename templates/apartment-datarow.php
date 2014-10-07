<p class="apartment-datarow">
	<a class="apartment-datarow--link" href="<?php the_permalink() ?>" tiltle="<?php the_title(); ?>">
		<span class="apartment-datarow--cell">
			<?php the_title(); ?>
		</span>
		
		<span class="apartment-datarow--cell">
			<?php echo get_post_meta( $post->ID, '_meta_floor', true ); ?>
		</span>
		
		<span class="apartment-datarow--cell">
			<?php echo get_post_meta( $post->ID, '_meta_omr', true ); ?> m<sup>2</sup>
		</span>
		
		<span class="apartment-datarow--cell">
			<?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?> NOK
		</span>

		<span class="apartment-datarow--cell">
				 <?php echo get_post_meta( $post->ID, '_meta_state', true ); ?>
		</span>
	</a>
</p>