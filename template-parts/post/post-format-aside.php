<?php
/**
 * Template part for displaying aside posts
 *
 * aside – Typically styled without a title. Similar to a Facebook note update.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-aside' ); ?>>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'content' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'permalink' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
