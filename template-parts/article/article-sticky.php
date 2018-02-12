<?php
  /**
   * Displaying a sticky article
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<?php
  if ( is_sticky() ) { ?>
    <div class="article-sticky">
      <span class="text">
        <?php echo log_lolla_sticky_post_text(); ?>
      </span>
    </div>
<?php } ?>
