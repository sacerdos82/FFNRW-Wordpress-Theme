<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );
	
	// Wordpress Menustuktur für Bootstrap anpassen
	require_once( 'external/wp_bootstrap_navwalker.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	// === Navigation ===
	
	register_nav_menus(array('headerContact' => 'Header Contact'));
	register_nav_menus(array('headerSocial' => 'Header Social'));
	register_nav_menus(array('headerNavigation' => 'Header Navigation'));
	
	register_nav_menus(array('headerImageArea' => 'Header Image Area'));
	
	register_nav_menus(array('footerNavigation' => 'Footer Navigation'));
	register_nav_menus(array('footerSocial' => 'Footer Social'));
	
	// ===
	
	
	
	// === Widgets ===
	
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="widget-title">',
			'after_title' => '</div><div class="widget-content">',
			));
			
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Widgets Left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="widget-title">',
			'after_title' => '</div><div class="widget-content">',
			));
			
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Widgets Middle',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="widget-title">',
			'after_title' => '</div><div class="widget-content">',
			));
			
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Widgets Right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="widget-title">',
			'after_title' => '</div><div class="widget-content">',
			));
			
	// ===
	
	
	
	// === Header Image ===
	
	$args = array(
		'default-image' => get_template_directory_uri() . '/img/header-background-default.jpg',
	);
	add_theme_support( 'custom-header', $args );
	
	// ===

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
		
	======================================================================================================================== */

	/* Add support for the Aside and Gallery Post Formats */
	add_theme_support('post-thumbnails');

	// Support Post Formats.
    // add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',  ) );
    
    add_theme_support( 'post-formats', array( 'gallery', 'image', 'quote', 'video' ) );


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		
		<li>
			<article class="comment" id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment, 64 ); ?>
				<div class="comment-meta">
					<h4><?php comment_author_link() ?></h4>
					<time><i class="fa fa-calendar"></i>&nbsp; <?php comment_date() ?> &nbsp; <i class="fa fa-clock-o"></i>&nbsp; <?php comment_time() ?></time>
				</div>
				<div class="comment-text">
					<?php comment_text() ?>
				</div>
			</article>
		<?php endif; ?>
		</li>
		
		<?php 
	}