<?php
  /**
   * Template part for displaying the footer copyrights
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>
<aside class="footer-copyright">
  <h3 hidden>Footer copyright</h3>

  <div class="text">
    &copy;
    <?php echo date( 'Y' ) ?>
    <a class="link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>">
      <?php bloginfo( 'name' ) ?>
    </a>
  </div>
</aside>
