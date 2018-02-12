<?php
  /**
   * Template part for displaying the footer navigation
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<nav class="footer-navigation">
  <h3 hidden>Footer navigation</h3>
  <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
      'before'         => '<span class="link">',
      'after'          => '</span>'
    ) );
  ?>
</nav>
