<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap">
      <?php get_template_part('templates/navigation'); ?>
      <div class="content">
        <a id="startcontent" title="Start of content"></a>
        <div class="top_content"></div>
        <div class="mid_top_content">
          <?php get_template_part('templates/introtext'); ?>
          <div class="rightintro">
            <div class="introimage <?= Extras\get_page_slug(); ?>"></div>
          </div>
        </div>
        <div class="foot_top_content"></div>
        <div class="maincontent">
          <a class="intLink" name="top"></a>
          <?php include Wrapper\template_path(); ?>
        </div>
        <div class="clear">&nbsp;</div>
      </div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
