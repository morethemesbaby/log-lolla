<?php
  /**
   * Displaying post author linking to the post
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<aside class="post-author-linking-to-post">
  <h3 hidden>Article author linking to post</h3>

  <?php echo wp_kses_post( log_lolla_get_arrow_html( 'top' ) ) ?>
  <?php echo wp_kses_post( log_lolla_get_arrow_html( 'top' ) ) ?>
  <?php echo wp_kses_post( log_lolla_get_arrow_html( 'top' ) ) ?>
  <?php log_lolla_post_author_linking_to_post(); ?>
</aside>
