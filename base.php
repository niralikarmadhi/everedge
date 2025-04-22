<?php
use Curious\Setup;
use Curious\Wrapper;

?>
<!doctype html> <!-- opening DOCTYPE HTML on base -->
<html lang="en-GB"> <!-- opening HTML on base -->
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M677ZCTK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');

        include Wrapper\template_path();

      do_action('get_footer');
      get_template_part('templates/footer');
    ?>


     <?php wp_footer(); ?>
  </body><!-- closing BODY  on base -->
</html><!-- closing HTML on base -->
