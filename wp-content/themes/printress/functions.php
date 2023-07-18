<?php 
$printress_redux_demo = get_option('redux_demo');
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/widget/footer.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/class-ocdi-importer.php';
function printress_theme_setup(){  
/*
 * This theme uses a custom image size for featured images, displayed on
 * "standard" posts and pages.
 */
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
	load_theme_textdomain('printress', $lang);
	add_theme_support( 'post-thumbnails' );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	// Switches default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
	// This theme uses wp_nav_menu() in one location. 
	register_nav_menus( array(
	'primary' =>  esc_html__( 'Primary Navigation Menu.', 'printress' ),
	));
}
add_action( 'after_setup_theme', 'printress_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
function printress_theme_scripts_styles(){
	$printress_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style('printress-preloader', get_template_directory_uri().'/assets/css/preloader.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('printress-meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style('swiper-bundle', get_template_directory_uri().'/assets/css/swiper-bundle.css');
	wp_enqueue_style('printress-backToTop', get_template_directory_uri().'/assets/css/backToTop.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style('ui-range-slider', get_template_directory_uri().'/assets/css/ui-range-slider.css');
	wp_enqueue_style('nice-select', get_template_directory_uri().'/assets/css/nice-select.css');
	wp_enqueue_style('fontAwesome5Pro', get_template_directory_uri().'/assets/css/fontAwesome5Pro.css');
	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css');
	wp_enqueue_style('printress-default', get_template_directory_uri().'/assets/css/default.css');
	wp_enqueue_style('printress-style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('printress-css', get_stylesheet_uri(), array(), '2023-01-12');

	if(isset($printress_redux_demo['chosen-color']) && $printress_redux_demo['chosen-color']==1){
	wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script('vendor-jquery', get_template_directory_uri().'/assets/js/vendor/jquery-3.6.0.min.js', array(), false, true);
	wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/vendor/waypoints.min.js', array(), false, true);
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), false, true);
	wp_enqueue_script('meanmenu', get_template_directory_uri().'/assets/js/meanmenu.js', array(), false, true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), false, true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/magnific-popup.min.js', array(), false, true);
	wp_enqueue_script('printress-parallax', get_template_directory_uri().'/assets/js/parallax.min.js', array(), false, true);
	wp_enqueue_script('printress-backToTop', get_template_directory_uri().'/assets/js/backToTop.js', array(), false, true);
	wp_enqueue_script('jquery-ui-slider-range', get_template_directory_uri().'/assets/js/jquery-ui-slider-range.js', array(), false, true);
	wp_enqueue_script('nice-select', get_template_directory_uri().'/assets/js/nice-select.min.js', array(), false, true);
	wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/counterup.min.js', array(), false, true);
	wp_enqueue_script('printress-ajax-form', get_template_directory_uri().'/assets/js/ajax-form.js', array(), false, true);
	wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), false, true);
	wp_enqueue_script('isotope-pkgd', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array(), false, true);
	wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', array(), false, true);
	wp_enqueue_script('printress-main', get_template_directory_uri().'/assets/js/main.js', array(), false, true);

}
add_action( 'wp_enqueue_scripts', 'printress_theme_scripts_styles' );
// Widget Sidebar
function printress_widgets_init() 
{
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'printress' ),
		'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'printress' ),        
		'before_widget' => '<div class="sidebar__widget white-bg-2 border-radius-6 mb-60 %2$s">',
		'after_widget'  => '</div>',        
		'before_title'  => '<div class="sidebar-title mb-25"><h4>',
		'after_title'   => '</h4></div>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Service', 'printress' ),
		'id'            => 'sidebar-2',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'printress' ),        
		'before_widget' => '<div class="sidebar__widget white-bg-2 border-radius-6 mb-60 %2$s">',
		'after_widget'  => '</div>',        
		'before_title'  => '<div class="sidebar-title mb-25"><h4>',
		'after_title'   => '</h4></div>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section', 'printress' ),
		'id'            => 'footer-1',        
		'description'   => esc_html__( 'Appears in the footer section of the site.', 'printress' ),        
		'before_widget' => '<div class="col-xl-3 col-lg-4 col-md-6">',
		'after_widget'  => '</div>',        
		'before_title'  => '',
		'after_title'   => ''
	) );
}
add_action( 'widgets_init', 'printress_widgets_init' );
function printress_search_form( $form ) {
	$form = '
	<div class="search-bx">
		<form role="search" action="'.esc_url(home_url('/')).'">
			<div class="input-group">
				<input name="s" type="text" class="form-control" placeholder="'.esc_attr__('Write your text', 'printress').'"  value="' . get_search_query() . '">
				<span class="input-group-btn">
					<button class="site-button"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
	</div>
	';
	return $form;
}
add_filter( 'get_search_form', 'printress_search_form' );
// Comment Form
function printress_theme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<?php
	  if(get_avatar($comment,$size='100' )!=''){?>
		<li>
			<div class="bd-comments-box">
				<div class="comments-avatar w-img br-img-6">
					<?php echo get_avatar($comment ); ?>
				</div>
				<div class="comments-text">
					<div class="avatar-name">
						<h5><?php printf(get_comment_author()) ?></h5>
						<span><?php comment_date('jS F Y'); ?></span>
						<span class="comment-reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
					</div>
					<p><?php comment_text(); ?></p>
				</div>
			</div>
		</li>
	<?php }else{?>
		<li>
			<div class="bd-comments-box">
				<div class="comments-text">
					<div class="avatar-name">
						<h5><?php printf(get_comment_author()) ?></h5>
						<span><?php comment_date('jS F Y'); ?></span>
						<span class="comment-reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
					</div>
					<p><?php comment_text(); ?></p>
				</div>
			</div>
		</li>
<?php }?>
<?php
}
function printress_excerpt() {
	$printress_redux_demo = get_option('redux_demo');
	if(isset($printress_redux_demo['blog_excerpt'])){
	$limit = $printress_redux_demo['blog_excerpt'];
	}else{
	$limit = 40;
	}
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
function printress_pagination($pages='') {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	if($pages==''){
		global $wp_query;
		 $pages = $wp_query->max_num_pages;
		 if(!$pages)
		 {
			 $pages = 1;
		 }
	}
	$pagination = array(
		'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format'        => '',
		'current'       => max( 1, get_query_var('paged') ),
		'total'         => $pages,
		'prev_text'     => wp_specialchars_decode('<i class="far fa-angle-double-left"></i>',ENT_QUOTES),
		'next_text'     => wp_specialchars_decode('<i class="far fa-angle-double-right"></i>',ENT_QUOTES),
		'type'          => 'list',
		'end_size'      => 3,
		'mid_size'      => 3
);
	$return = paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination_nav">', $return );
}


/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'printress_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function printress_theme_register_required_plugins(){
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
            'name'      => esc_html__( 'One Click Demo Import', 'printress' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
	      array(
	            'name'      => esc_html__( 'Classic Editor', 'printress' ),
	            'slug'      => 'classic-editor',
	            'required'  => true,
	        ), 
	      array(
	            'name'      => esc_html__( 'Classic Widgets', 'printress' ),
	            'slug'      => 'classic-widgets',
	            'required'  => true,
	        ),
	      array(
	            'name'      => esc_html__( 'Widget Importer & Exporter', 'printress' ),
	            'slug'      => 'widget-importer-&-exporter',
	            'required'  => true,
	        ), 
	      array(
	            'name'      => esc_html__( 'Contact Form 7', 'printress' ),
	            'slug'      => 'contact-form-7',
	            'required'  => true,
	        ), 
	      array(
	            'name'      => esc_html__( 'WP Maximum Execution Time Exceeded', 'printress' ),
	            'slug'      => 'wp-maximum-execution-time-exceeded',
	            'required'  => true,
	        ), 
	      array(
	            'name'                     => esc_html__( 'Elementor', 'printress' ),
	            'slug'                     => 'elementor',
	            'required'                 => true,
	            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
	        ),
	      array(
	            'name'                     => esc_html__( 'Printress Common', 'printress' ),
	            'slug'                     => 'printress-common',
	            'required'                 => true,
	            'source'                   => get_template_directory() . '/framework/plugins/printress-common.zip',
	        ),
	      array(
	            'name'                     => esc_html__( 'Printress Elementor', 'printress' ),
	            'slug'                     => 'printress-elementor',
	            'required'                 => true,
	            'source'                   => get_template_directory() . '/framework/plugins/printress-elementor.zip',
	        ),
	);
	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' => '',                      // Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'printress' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'printress' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'printress' ), // %s = plugin name.
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'printress' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'printress' ), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'printress' ), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'printress' ), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'printress' ), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'printress' ), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'printress' ), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'printress' ), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'printress' ), // %1$s = plugin name(s).
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'printress' ),
			'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'printress' ),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'printress' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'printress' ),
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'printress' ), // %s = dashboard link.
			'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}
?>