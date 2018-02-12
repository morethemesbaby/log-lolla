<?php
/**
 * Template part for displaying chat posts
 *
 * chat – A chat transcript, like so:
 * John: foo
 * Mary: bar
 * John: foo 2
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-chat' ); ?>>
  <?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
  <?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'content' ); ?>
  <?php get_template_part( 'template-parts/article/article', 'permalink-if-no-title' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
