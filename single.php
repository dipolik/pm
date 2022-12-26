<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pralniymaster
 */

get_header();
?>
<div class="container site-content">
	<!--single-->
	<div class="row d-flex flex-column-reverse flex-md-row">
	<main id="primary" class="site-main col-12 col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/*
			* Custom post navigation
			*/
			pralniymaster_posts_nav();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php get_sidebar( 'primary' ); ?>
<!-- <?php
// get_sidebar();
?> -->
</div>
</div>
<?php
get_footer();
?>
