<?php
  /**
   * Displaying post date, author, categories and tags
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<aside class="article-footer">
  <h3 hidden>Article footer</h3>

  <div class="date-and-author">
    <?php get_template_part( 'template-parts/article/article', 'date' ); ?>
    <?php get_template_part( 'template-parts/article/article', 'author' ); ?>
  </div>

  <?php if ( has_category() && has_tag() ) { ?>
    <div class="categories-and-tags">
      <?php get_template_part( 'template-parts/article/article', 'categories' ); ?>
      <?php get_template_part( 'template-parts/article/article', 'tags' ); ?>
    </div>
  <?php } ?>

  <?php get_template_part( 'template-parts/article/article', 'edit-link' ); ?>
</aside>
