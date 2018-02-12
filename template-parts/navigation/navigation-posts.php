<?php
  /**
   * Template part for displaying navigation in a loop
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>

<?php
  $args = array(
    'prev_text' => log_lolla_get_arrow_html( 'left' ) . 'Older',
    'next_text' => log_lolla_get_arrow_html( 'right' ) . 'Newer',
  );

  echo the_posts_navigation( $args );
?>
