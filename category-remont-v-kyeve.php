<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pralniymaster
 */

get_header();
?>
<div class="container site-content">
	<div class="row">
	<main id="primary" class="site-main category-template col-12 col-md-8">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php echo get_queried_object()->name;?></h1>
				<p><?php echo category_description(); ?></p>
			</div>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Цикл WordPress -->
			
			<div class="col-12 col-md-6">
				<a href="<?php the_permalink(); ?>" class="card" style=" display: inline-block;">
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
				<img class="card-img-top" src="<?php echo $img_url[0];?>"/>
  					<div class="card-body">
					  <h3 class="card-title"><?php the_title( );?></h3>
					  <p class="card-text"><?php the_excerpt( );?></p>
  					</div>
				</a>
			</div>

			<?php endwhile; else : ?>
				<p><?php pll_e('Записей нет.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
		
			
	</main><!-- #main -->

<?php
	get_sidebar( 'primary' );
?>
</div>
</div>
<?php
get_footer();
?>
