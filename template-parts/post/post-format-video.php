<?php
/**
 * Template part for displaying video posts
 *
 * video – A single video. The first <video /> tag or object/embed in the post content
 * could be considered the video.
 * Alternatively, if the post consists only of a URL, that will be the video URL.
 * May also contain the video as an attachment to the post,
 * if video support is enabled on the blog (like via a plugin).
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package Log_Lolla
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article post-format-video' ); ?>>
  <?php get_template_part( 'template-parts/article/article', 'sticky' ); ?>
  <?php get_template_part( 'template-parts/article/article', 'title' ); ?>
	<?php get_template_part( 'template-parts/article/article', 'content' ); ?>
  <?php get_template_part( 'template-parts/article/article', 'permalink-if-no-title' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
