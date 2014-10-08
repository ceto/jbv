<main class="main main-object" role="main">
  <div class="wrapper wrapper-fullwidth">

    <header class="apartment-hero">
      <div class="wrapper wrapper-fullwidth"></div>
    </header>

    <?php
      $building = get_term_by( 'slug', get_query_var( 'term' ), 'object' );
      $ima = get_tax_meta( $building->term_id ,'_meta_image');
      $imcifull = wp_get_attachment_image_src( $ima[id], 'full169');
      $imcilarge = wp_get_attachment_image_src( $ima[id], 'large169');
      $imcimedium = wp_get_attachment_image_src( $ima[id], 'medium169');
    ?>
    <div class="page-header">
      <h2><span>Finn Din Bolig</span><?php echo $building->name ?></h2>
    </div>
    
    <div class="thechooser">
      <style>
        .visual-chooser { background-image: url(<?php echo $imcimedium[0]; ?>); }

        @media only screen and (min-width: 1024px) {
          .visual-chooser { background-image: url(<?php echo $imcilarge[0]; ?>); }
        }
        
        @media only screen and (min-width: 1280px) {
          .visual-chooser { background-image: url(<?php echo $imcifull[0]; ?>); }
        }
      </style>
      <div class="visual-chooser">
      </div>

      <div class="wrapper wrapper-wide">
        <div class="datatable datatable-apartments">
          <p class="datarow datatable--head">
            <span class="datarow--cell">Navn</span>
            <span class="datarow--cell">Floor</span>
            <span class="datarow--cell">Område</span>
            <span class="datarow--cell">Pris</span>
            <span class="datarow--cell">State</span>
          </p>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/apartment-datarow'); ?>
          <?php endwhile; ?>
        </div>
      </div>

    </div>
  
  </div>
  
</main><!-- /.main -->