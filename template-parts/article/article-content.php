<?php
  /**
   * Displaying post content
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<aside class="article-content">
  <h3 hidden>Article content</h3>

  <div class="text">
    <?php
      the_content( log_lolla_add_readmore_to_content() );
    ?>
  </div>
</aside>
