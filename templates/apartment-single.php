<header class="apartment-hero is_opaque">
  <div class="wrapper wrapper-fullwidth">
  </div>
</header>
<div class="wrapper wrapper-fullwidth wrapper-apartment ">
  <div class="page-header">
    <h2><span>Finn Din Bolig</span> <?php the_title(); ?></h2>
  </div>
  <div class="apartment-details is_light">


    <div class="apartment-details--left">
      <div class="apartment-details--left--inner">
        <figure class="apartment-3dfloormap">
          <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');  ?>
          <a class="popup-zoom" href="<?php echo $imgsrc[0]; ?>">
            <?php the_post_thumbnail('large'); ?>
          </a>
        </figure>
      </div>
    </div>



    <div class="apartment-details--right">
      
      <div class="apartment-details--right--inner-white">
        <div class="holdit">
          <figure class="apartment-2dfloormap">
            <a class="popup-zoom" href="<?php echo get_post_meta($post->ID, '_meta_floormap', true); ?>">
              <img src="<?php echo get_post_meta($post->ID, '_meta_floormap', true); ?>" />
            </a>
          </figure>
          <figure class="apartment-schema">
            <a href="#">
              <img src="<?php echo get_post_meta($post->ID, '_meta_schema', true); ?>" />
            </a>
          </figure>
        </div>
      </div>

      <?php 
        $types = get_the_terms( $post->ID, 'apartment-type' );
        foreach ($types as $key => $value) { $type = $value; }
      ?>
      <div class="apartment-details--right--inner-red">
        <div class="holdit">
          <div class="apartment-facts">
            <p class="data-item"><span>Navn</span> <?php the_title(); ?></p>
            <p class="data-item"><span>Floor</span> <?php echo get_post_meta( $post->ID, '_meta_floor', true ); ?></p>
            <p class="data-item"><span>Område</span> <?php echo get_post_meta( $post->ID, '_meta_omr', true ); ?> m<sup>2</sup></p>
            <p class="data-item"><span>Rom</span> <?php echo get_post_meta( $post->ID, '_meta_rom', true ); ?></p>
            <p class="data-item"><span>Balkong</span> <?php echo get_post_meta( $post->ID, '_meta_balkong', true ); ?> m<sup>2</sup></p>
            
            <p class="price data-item"><span>Pris</span> <?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?> NOK</p>
            <p class="data-item"><span>Type</span> <a href="<?php echo get_term_link($type); ?>"><?php echo $type->name; ?></a></p>
            <p class="data-item"><span>State</span> <?php echo get_post_meta( $post->ID, '_meta_state', true ); ?></p>
            
          </div>
          <div class="apartment-discl">
            <?php the_content(); ?>
            <a class="btn btn-light" data-toggle="collapse" data-target="#contactblock">Meld din interesse</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>