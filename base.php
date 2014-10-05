<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 9]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  
  <?php include roots_template_path(); ?>

  <?php /* if (roots_display_sidebar()) : ?>
    <aside class="sidebar" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside><!-- /.sidebar -->
  <?php endif; */ ?>

  <?php get_template_part('templates/contact','form'); ?>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

<script src="<?php echo esc_url(home_url('/')); ?>:35729/livereload.js"></script>
</body>
</html>
