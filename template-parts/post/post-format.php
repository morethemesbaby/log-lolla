<?php
/**
 * Template part for displaying posts
 *
 * We would like to display parts of a post in the same way like parts of a page
 * Therefore we add a new class `article` to both posts and pages and style them via this handle
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla
 */
?>

<?php
	$post_klass = log_lolla_post_class();
	$post_klass_array = array(
		'article',
		'post-format-standard',
		$post_klass
	);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_klass_array); ?>>
	<?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'featured-image' ); ?>
	<?php
		if ( ! is_single() && has_excerpt() ) {
			get_template_part( 'template-parts/article/article', 'excerpt' );
		} else {
			get_template_part( 'template-parts/article/article', 'content' );
			get_template_part( 'template-parts/article/article', 'paginated-content' );
		}
	?>
	<?php get_template_part( 'template-parts/article/article', 'permalink-if-no-title' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
