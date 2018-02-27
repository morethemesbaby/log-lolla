<?php
  /**
   * Displaying post categories
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<?php if ( has_category() ) { ?>
  <aside class="post-categories">
    <h3 hidden>Article categories</h3>

    <?php log_lolla_post_categories(); ?>
  </aside>
<?php } ?>
