<?php
/**
 * pralniymaster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pralniymaster
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pralniymaster_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pralniymaster_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pralniymaster, use a find and replace
		 * to change 'pralniymaster' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pralniymaster', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'pralniymaster-feature', 650, 342, true );
		add_image_size( 'singlepost-thumb', 590, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'pralniymaster' ),
			)
		);

		register_nav_menus( array(
			'primary' => __( 'Primary Bootsrap Menu', 'pralniymaster' ),
		) );

		

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pralniymaster_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Add support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	}
endif;
add_action( 'after_setup_theme', 'pralniymaster_setup' );




/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pralniymaster_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pralniymaster_content_width', 640 );
}
add_action( 'after_setup_theme', 'pralniymaster_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function pralniymaster_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'pralniymaster' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'pralniymaster' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }

function pralniymaster_widgets_init() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pralniymaster' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pralniymaster' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( array(
        'name'          => 'Header Phone Area',
        'id'            => 'header-phones-widget',
        'before_widget' => '<div class="phone-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="phone-title">',
        'after_title'   => '</h2>',
    ) );
	/* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'pralniymaster_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function pralniymaster_scripts() {
	wp_enqueue_style( 'pralniymaster-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pralniymaster-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pralniymaster-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	// wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'pralniymaster-style', get_template_directory_uri() . '/public/css/styles.css' );
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/animate.css' );


	wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );
	wp_enqueue_script( 'lazy-js' , get_template_directory_uri() . '/js/lazy.js', array('jquery'), null, 'in_footer');
	wp_enqueue_script( 'wow-js' , get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, 'in_footer');
	wp_enqueue_script( 'wow-init-js' , get_template_directory_uri() . '/js/custom.js', array('jquery'), null, 'in_footer');
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pralniymaster_scripts' );

/*
* Add 'Defer' to scripts
*/

function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array('bootstrap-js', 'wow-js', 'lazy-js', 'wow-init-js');
  
	foreach($scripts_to_defer as $defer_script) {
	   if ($defer_script === $handle) {
		  return str_replace(' src', ' defer src', $tag);
	   }
	}
	return $tag;
 }
 add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

/*
* Add 'Async' to scripts
*/
//  function add_async_attribute($tag, $handle) {
// 	// add script handles to the array below
// 	$scripts_to_async = array('google_map_api');  
// 	foreach($scripts_to_async as $async_script) {
// 	   if ($async_script === $handle) {
// 		  return str_replace(' src', ' async="async" src', $tag);
// 	   }
// 	}
// 	return $tag;
//  }
//  add_filter('script_loader_tag', 'add_async_attribute', 10, 2);


/*
* Translation
*/
add_action('init', function() {
	pll_register_string('mytheme-hello', 'Hello world');
	pll_register_string('more-btn', 'Детальніше');
	pll_register_string('get-discount-btn', 'Отримати');
	pll_register_string('submit-btn', 'ЗАМОВИТИ КОНСУЛЬТАЦІЮ');
	pll_register_string('no-posts', 'Записей нет.');
	pll_register_string('banner-txt-1', 'Терміновий ремонт вашої <br> пральної машини, на дому.');
	pll_register_string('banner-txt-2', 'ШВИДКО');
	pll_register_string('banner-txt-3', 'ЯКІСНО');
	pll_register_string('banner-txt-4', 'від 400грн');
	pll_register_string('s-achiv-title', 'Чому обирають саме нас:');
	pll_register_string('s-achiv-1-title', 'Комфортний ремонт');
	pll_register_string('s-achiv-1-text', 'Ми проводимо ремонт на місці. Тож Вам не потрібно нікуди везти пральну машину.');
	pll_register_string('s-achiv-2-title', '100+ майстрів');
	pll_register_string('s-achiv-2-text', 'В нашому арсеналі більш ніж 100 майстрів. Готові приїхати швидко в кожному районі Києва.');
	pll_register_string('s-achiv-3-title', 'Впевненність клієнта');
	pll_register_string('s-achiv-3-text', 'Ми несемо відповідальність за наших майстрів. Гарантуємо сервіс високої якості');
	pll_register_string('s-achiv-4-title', 'Сервіс 24/7');
	pll_register_string('s-achiv-4-text', 'Ви маєте можливість залишити заявку в будь-який зручний для Вас час.');
	pll_register_string('s-achiv-5-title', 'Захист здоров’я');
	pll_register_string('s-achiv-5-text', 'Майстри проходять щоденний мед. контроль та виконують свою роботу в масках.');
	pll_register_string('s-achiv-6-title', 'Зручна оплата');
	pll_register_string('s-achiv-6-text', 'Оплата ремонту зручним для Вас способом, готівкою або переводом на картку.');
	pll_register_string('s-achiv-7-title', '10 Років турботи');
	pll_register_string('s-achiv-7-text', 'Ми ремонтуємо техніку з 2012 року. Ми знаємо все про ремонт пральних машин');
	pll_register_string('s-achiv-8-title', 'Економія часу');
	pll_register_string('s-achiv-8-text', 'Проводимо ремонт в зручний час, узгодженний з Вами, заздалегіть.');
	pll_register_string('s-pricelist-title','Розповсюджені несправності');
	
	pll_register_string('s-pricelist-1-title','Не віджимає:');
	pll_register_string('s-pricelist-1-text-1','Заміна електронного модуля');
	pll_register_string('s-pricelist-1-text-2','Заміна ременя приводу барабана');
	pll_register_string('s-pricelist-1-text-3','Заміна датчика рівня води');
	pll_register_string('s-pricelist-1-text-4','Заміна амортизаторів');
	pll_register_string('s-pricelist-350','від 350 грн');
	
	pll_register_string('s-pricelist-2-title','Не набирає воду:');
	pll_register_string('s-pricelist-2-text-1','Усунення засмічення');
	pll_register_string('s-pricelist-2-text-2','Заміна заливного клапана');
	pll_register_string('s-pricelist-2-text-3','Заміна датчика рівня води');

	pll_register_string('s-pricelist-3-title','Протікає:');
	pll_register_string('s-pricelist-3-text-1','Заміна манжети');
	pll_register_string('s-pricelist-3-text-2','Заміна помпи');
	pll_register_string('s-pricelist-3-text-3','Заміна зливного шлангу');
	pll_register_string('s-pricelist-3-text-4','Заміна патрубків');
	pll_register_string('s-pricelist-400','від 400 грн');

	pll_register_string('s-pricelist-4-title','Не зливає воду:');
	pll_register_string('s-pricelist-4-text-1','Усунення засмічення');
	pll_register_string('s-pricelist-4-text-2','Заміна фільтра зливного насоса');
	pll_register_string('s-pricelist-4-text-3','Заміна помпи');
	pll_register_string('s-pricelist-450','від 450 грн');

	pll_register_string('s-pricelist-5-title','Не гріє воду:');
	pll_register_string('s-pricelist-5-text-1','Заміна ТЕНу');
	pll_register_string('s-pricelist-5-text-2','Заміна датчика температури');
	pll_register_string('s-pricelist-5-text-3','Заміна модуля');
	
	pll_register_string('s-pricelist-6-title','Шумить:');
	pll_register_string('s-pricelist-6-text-1','Видалення стороннього предмету');
	pll_register_string('s-pricelist-6-text-2','Заміна амортизаторів');
	pll_register_string('s-pricelist-6-text-3','Заміна підшипників');
	pll_register_string('s-pricelist-800','від 800 грн');
	
	pll_register_string('free-diagnostic','Діагностика безкоштовно*');
	pll_register_string('free-diagnostic-desc','*У випадку згоди на ремонт. При відмові від ремонту 250 грн.');
	pll_register_string('s-pricelist-cta','Якщо маєте схожі проблеми з пральною машиною, <br> <span	class="bold">радимо не зволікати</span> та одразу <span class="bold">звернутись </span>до нас <span class="bold">за допомогою</span>');
	pll_register_string('s-pricelist-cta-btn','ПОТРІБЕН РЕМОНТ');
	
	pll_register_string('s-process','Як відбувається ремонт:');
	pll_register_string('s-process-text-1','Заповнюєте форму');
	pll_register_string('s-process-text-2','Ми телефонуємо Вам та надаємо первинну консультацію');
	pll_register_string('s-process-text-3','Приїздимо у зручний для Вас час у зручне для Вас місце');
	pll_register_string('s-process-text-4','Проводимо огляд та діагностику пральної машини, узгоджуємо ціну');
	pll_register_string('s-process-text-','Після ремонту, видаємо гарантію. Не залишаємо після себе сміття.');
	pll_register_string('s-process-text-','ЗАМОВИТИ РЕМОНТ');

	pll_register_string('s-form-title','Надішліть запит і ми одразу Вам передзвонимо');
	pll_register_string('s-form-text-1','Обіцяємо Вам не надсилати спам, не передавади Ваші данні третім особам, та повну конфіденційність');
	
	pll_register_string('s-brands-title','Працюємо з усіма брендами');
	pll_register_string('s-brands-text','Та багатьма іншими...');
	 
	pll_register_string('s-half-title','Ставимось з розумінням до Ваших побажань');
	pll_register_string('s-half-text','Ваша пральна машина відмовляється віджимати білизну, зливати мильну воду, запускати процес полоскання чи зовсім не нагріває воду для прання? Тоді слід негайно викликати майстра та припинити прання речей. Наша компанія пропонує допомогу для всіх жителів Києва, тому що ми маємо величезний досвід роботи з пральними машинами різних моделей та різних брендів, починаючи з 2009 року. 	Завдяки професіоналізму команди наших фахівців, нам вдається впоратися із завданнями всіляких рівнів складності: починаючи з банального чищення фільтра, що засмічений, і закінчуючи складними відновлювальними роботами, заміною комплектуючих, що не підлягають ремонту (заміна підшипників, відновлення електронного модуля та інше).');
	pll_register_string('modal-call-title','Зв\'яжіться з нами зручним способом');
	pll_register_string('modal-call-title-2','Подзвоніть нам:');
	pll_register_string('modal-call-title-3','Напишіть нам на email:');
	pll_register_string('modal-call-title-4','Надішліть нам заявку:');
	pll_register_string('header-bonus-1','24/7 Без вихідних та свят');
	pll_register_string('header-bonus-2','Гарантія до 12 місяців');
	pll_register_string('header-bonus-3','Час обираєте - Ви!');
	pll_register_string('header-bonus-4','Всі райони Києва та передмістя');
	pll_register_string('sidebar-form-title','Залишити заявку:');
	pll_register_string('','');
	pll_register_string('','');
	pll_register_string('','');
	pll_register_string('','');
	pll_register_string('','');
	
});


/*
* Post navigation
*/

function pralniymaster_posts_nav(){
	$category = get_the_category();
	$category_name = $category[0]->name;
    $next_post = get_next_post($category_name);
    $prev_post = get_previous_post($category_name);
	$nextPostExcerpt = get_the_excerpt($next_post->ID);
	$prevPostExcerpt = get_the_excerpt($prev_post->ID);
     
    if ( $next_post || $prev_post ) : ?>
     
        <div class="post post-navigation row">
            <div class="col-12 col-md-6">
                <?php if ( ! empty( $prev_post ) ) : ?>
					<div class="card">
						<?php echo get_the_post_thumbnail( $prev_post, [ 100, 9999 ], array( 'class' => 'card-img-top' ) ); ?>
						<div class="card-body">
						  <h5 class="card-title"><?php echo get_the_title( $prev_post ); ?></h5>
						  <p class="card-text"><?php echo $prevPostExcerpt ?></p>
						  <a href="<?php echo get_permalink( $prev_post ); ?>" class="btn btn-theme"><span><?php pll_e('Детальніше'); ?></span></a>
						</div>
					</div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6"> 
				<?php if ( ! empty( $next_post ) ) : ?>
					<div class="card">
				    	<?php echo get_the_post_thumbnail( $next_post, [ 100, 9999 ], array( 'class' => 'card-img-top' ) ); ?>
				    	<div class="card-body">
				    		<h5 class="card-title"><?php echo get_the_title( $next_post ); ?></h5>
				    		<p class="card-text"><?php echo $nextPostExcerpt ?></p>
				    		<a href="<?php echo get_permalink( $next_post ); ?>" class="btn btn-theme"><span><?php pll_e('Детальніше'); ?></span></a>
				    	</div>
				  	</div>
				<?php endif; ?>
            </div>
        </div> <!-- .wpb-posts-nav -->
     
    <?php endif;
}

/**
 * Filter the except length to 20 words.
 */

function new_excerpt_length($length) {
	return 100;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	 
	// Changing excerpt more
	function new_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Implement the Custom Header feature.
 */

 require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */

 require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */

 require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Prevent Contact Form 7 add <p> tags
 */
add_filter('wpcf7_autop_or_not', '__return_false');
