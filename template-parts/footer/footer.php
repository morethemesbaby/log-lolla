<?php
  /**
   * Template part for displaying the footer
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<footer class="footer">
  <h3 hidden>
    <?php esc_html_e( 'Footer', 'log-lolla' ); ?>
  </h3>

  <?php get_template_part( 'template-parts/footer/footer', 'navigation' ); ?>
  <?php get_template_part( 'template-parts/footer/footer', 'copyright' ); ?>
  <?php get_template_part( 'template-parts/footer/footer', 'credits' ); ?>
</footer>
