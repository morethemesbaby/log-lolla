<?php
  /**
   * Displaying post featured image
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<?php if ( has_post_thumbnail() ): ?>
<aside class="article-featured-image">
  <h3 hidden>Article Featured Image</h3>

  <figure class="figure">
		<a class="link" href="<?php echo esc_url( get_permalink() ) ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>

    <?php
      the_title(
        '<figcaption class="figcaption"><a class="link" href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0') . '">',
        '</a></figcaption>'
      );
    ?>
  </figure>
</aside>
<?php endif; ?>
