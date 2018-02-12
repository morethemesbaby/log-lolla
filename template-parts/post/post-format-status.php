<?php
/**
 * Template part for displaying status posts
 *
 * status – A short status update, similar to a Twitter status update.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-status' ); ?>>
	<?php get_template_part( 'template-parts/article/article', 'date-and-time' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'content' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'author-linking-to-post' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
