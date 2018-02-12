<?php
/**
 * Template part for displaying quote posts
 *
 * quote – A quotation. Probably will contain a blockquote holding the quote content.
 * Alternatively, the quote may be just the content, with the source/author being the title.
 *
 * We go with the second option: we assume everything is a quote, and we don't style an eventual quote inside
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-quote' ); ?>>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'content' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'permalink-if-no-title' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
