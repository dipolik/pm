<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pralniymaster
 */

if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area col-12 col-md-4">

    <!-- cf7 Banner Form-->
    <div class="widget widget_block">
        <h3 class="dark-blue fz-24"><?php pll_e('Залишити заявку:')?></h3>
        <?php echo do_shortcode( '[contact-form-7 id="100" title="Sidebar Form"]' ); ?>
        <?php echo do_shortcode( '[contact-form-7 id="102" title="Sidebar Form Extended"]' ); ?>
    </div>

    <!-- Show posts excluding current post -->
    <div class="widget widget_block">
        <ul class="list list-unstyled">
            <?php global $post; 
                $args = array('showposts' => 5, 'category_name' => 'remont-v-kieve', 'post__not_in' => array( $post->ID )); 
                query_posts( $args ); 
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
            <li class="list-item "><a class="dark-blue" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_query(); endif; ?>
        </ul>
    </div>
    
    <?php dynamic_sidebar( 'primary' ); ?>
</aside><!-- #secondary -->