<?php
/**
 * Template part for displaying the header image
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla
 */
?>
  <?php if ( get_header_image() ) : ?>
    <aside class="header-image">
      <h3 hidden>Image</h3>

      <figure class="image">
        <?php the_header_image_tag(); ?>
      </figure>
    </aside>
  <?php endif; ?>
