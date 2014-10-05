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
  
  <?php if ( is_front_page() ) : ?>
    <!-- Master Slider -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/masterslider/jquery.easing.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/masterslider/masterslider.min.js"></script>
    <script>
      var slider = new MasterSlider();
      slider.setup('masterslider' , {
        width:1920,    // slider standard width
        height:1024,   // slider standard height
        space:0,
        preload:3,
        fullwidth:true,
        autoHeight:true,
        view:"fade"
        // more slider options goes here...
      });
      // adds Arrows navigation control to the slider.
      slider.control('arrows');
      slider.control('thumblist', { 
        autohide:false,
        inset:false,
        space:12,

      });
    </script>
  <?php endif; ?>


</body>
</html>
