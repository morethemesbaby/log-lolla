<?php
  /**
   * Displaying navigation for paginated post content
   *
   * @link https://codex.wordpress.org/Styling_Page-Links
   *
   * @package Log_Lolla
   */
?>

<?php
  /**
   * Cannot be wrapped into an <ul>,<li> structure ....
   */
  $link_pages = wp_link_pages( array(
    'before' => '<span class="page-links-title">' . __( 'Pages:', 'log-lolla' ) . '</span><div class="ul page-links">',
    'after' => '</div>',
    'separator' => '&nbsp;',
    'echo' => 0
  ) );
?>

<?php if ( ! empty( $link_pages ) ) { ?>
  <nav class="post-paginated-content">
    <h3 hidden>Paginated content navigation</h3>

    <div class="text">
      <?php echo $link_pages; ?>
    </div>
  </nav>
<?php } ?>
