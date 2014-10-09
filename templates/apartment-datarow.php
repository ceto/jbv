<p class="datarow">

	<a id="ap-<?php echo $post->ID; ?>" 
    class="datarow--link state-<?php echo get_post_meta( $post->ID, '_meta_state', true ); ?>"
    href="<?php the_permalink(); ?>"
    data-svg="<?php echo get_post_meta( $post->ID, '_meta_svgdata', true ); ?>"
    data-url="<?php the_permalink(); ?>"
    data-omr="<?php echo get_post_meta( $post->ID, '_meta_omr', true ); ?> m<sup>2</sup>"
    data-pris="<?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?> NOK"
    data-state="<?php echo get_post_meta( $post->ID, '_meta_state', true ); ?>"
    data-name="<?php the_title(); ?>"
    tiltle="<?php the_title(); ?>"
  >
		<span class="datarow--cell">
			<?php the_title(); ?>
		</span>
		
		<span class="datarow--cell">
			<?php echo get_post_meta( $post->ID, '_meta_floor', true ); ?>
		</span>
		
		<span class="datarow--cell">
			<?php echo get_post_meta( $post->ID, '_meta_omr', true ); ?> m<sup>2</sup>
		</span>
		
		<span class="datarow--cell">
			<?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?> NOK
		</span>

		<span class="datarow--cell">
				 <?php echo get_post_meta( $post->ID, '_meta_state', true ); ?>
		</span>
	</a>
</p>