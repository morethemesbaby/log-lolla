<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php
		$has_title = the_title_attribute( 'echo=0');

		if (! $has_title ) {
			get_template_part( 'template-parts/article/article', 'permalink' );
		}
	?>
	<?php get_template_part( 'template-parts/article/article', 'date' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
