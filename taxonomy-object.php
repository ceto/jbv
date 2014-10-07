<main class="main main-object" role="main">
  <div class="wrapper wrapper-fullwidth">

    <header class="apartment-hero">
      <div class="wrapper wrapper-fullwidth"></div>
    </header>

    <div class="page-header">
      <h2>Finn Din Bolig</h2>
    </div>
    
    <div class="thechooser">
      
    </div>
    <div class="wrapper wrapper-wide">
      <div class="apartment-datatable">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/apartment-datarow'); ?>
        <?php endwhile; ?>
      </div>
    </div>
  
  </div>
  
</main><!-- /.main -->