<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pralniymaster
 */

?>

		<footer class="section s-footer">
    	    <div class="container">
    	        <div class="row d-flex flex-column flex-md-row justify-content-md-between text-center">
    	            <div class="col-12 col-md-4">
    	                <a href="#bannerSection" class="site-logo site-logo--lght">
    	                    <img src="<?php bloginfo('template_url'); ?>/img/logo-icon-dark.svg" alt="Пральний Майстер"
    	                            class="icon" width="280" height="100">
    	                     <span>Пральний Майстер</span>
    	                </a>
    	                
    	            </div>
					<div class="col-12 col-md-4 pt-5 pt-md-0">
						<a class="s-footer--phone binct-phone-number-1" href="tel:+380966000354">+38(096) 600-03-54</a>
						<a class="s-footer--phone binct-phone-number-2" href="tel:+380936000354">+38(093) 600-03-54</a>
					</div>
    	        </div>
    	    </div>
    	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
