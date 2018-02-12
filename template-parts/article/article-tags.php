<?php
  /**
   * Displaying post tags
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<?php if ( has_tag() ) { ?>
  <aside class="article-tags">
    <h3 hidden>Article tags</h3>

    <?php log_lolla_post_tags(); ?>
  </aside>
<?php } ?>
