<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pralniymaster
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="robots" content="index, follow" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">


	<!-- Google Tag Manager -->
	<script async>
		var fired = false;

		window.addEventListener('load', () => {
		    if (fired === false) {
		        fired = true;
		        setTimeout(() => {
					(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-KHRB8S8');
		        }, 1500)
			}
		});
	</script>
	<!-- End Google Tag Manager -->


<!-- 	
	<script rel="dns-prefetch">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KHRB8S8');</script> -->
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHRB8S8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pralniymaster' ); ?></a>

	<header id="masthead" class="site-header">
	<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top bg-light" role="navigation">
			<div class="container position-relative blue-line">
    			<!-- Brand and toggle get grouped for better mobile display -->
    		
				<a class="navbar-brand site-logo site-logo--drk d-flex align-items-center" href="<?php echo get_site_url(); ?>">
					<img src="<?php bloginfo('template_url'); ?>/img/logo-icon.svg" alt="Пральний Майстер" class="icon" width="120" height="43">
					<span>Пральний Майстер</span>
				</a>
				
				<?php
 
 				if ( is_active_sidebar( 'header-phones-widget' ) ) : ?>
					 <div id="header-widget-area" class="navbar-widget-area" role="complementary">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-call" data-toggle="modal" data-target="#modalCallPopup" aria-label="Call us">

						</button>

						<!-- Modal -->
						<div class="modal fade" id="modalCallPopup" tabindex="-1" role="dialog" aria-labelledby="modalCallPopupTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle"><?php pll_e('Зв\'яжіться з нами зручним для Вас способом')?></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
								<h3><?php pll_e('Подзвоніть нам:')?></h3>
								<div class="d-flex flex-column mb-5">
								<a href="tel:+380966000354" class="binct-phone-number-1 mb-2"><b>+38 (096) 600-03-54</b></a>
								<a href="tel:+380936000354" class="binct-phone-number-2"><b>+38 (093) 600-03-54</b></a>
								</div>
								<h3><?php pll_e('Напишіть нам на email:')?></h3>
								<div class="d-flex mb-5">
								<a href="mailto:mail@pralniymaster.kiev.ua"><b>mail@pralniymaster.kiev.ua</b></a>
								</div>
								<h3><?php pll_e('Надішліть нам заявку:')?></h3>
								<?php echo do_shortcode('[contact-form-7 id="154" title="Header Form"]')?>
						      </div>
						    </div>
						  </div>
						</div>
					
					 <?php dynamic_sidebar( 'header-phones-widget' ); ?>
					 </div>
				
 				<?php endif; ?>	

				<button class="navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                    </button>

    	    	<?php
    	    	wp_nav_menu( array(
    	    	    'theme_location'    => 'primary',
    	    	    'depth'             => 2,
    	    	    'container'         => 'div',
    	    	    'container_class'   => 'collapse navbar-collapse bg-light',
    	    	    'container_id'      => 'navbarSupportedContent',
    	    	    'menu_class'        => 'navbar-nav',
    	    	    // 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    	    	    'fallback_cb'       => 'false',
    	    	    'walker'            => new WP_Bootstrap_Navwalker(),
    	    	) );
    	    	?>
				<div class="phone-numbers"></div>
				
    	</div>
	</nav>
	</header><!-- #masthead -->
