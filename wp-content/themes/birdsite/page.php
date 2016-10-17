<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage BirdSITE
 * @since BirdSITE 1.0
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php comments_template( '', true ); ?>
	</article>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
