<?php
/**
 * Template part for displaying gallery posts
 *
 * gallery – A gallery of images.
 * Post will likely contain a gallery shortcode and will have image attachments.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-gallery' ); ?>>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'gallery' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'permalink-if-no-title' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
