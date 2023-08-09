<?php
  /**
   * Functions and definitions
   * @package web-base-theme
  */
  if(!defined('_S_VERSION')){
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.4' );
  }

  if(!validate_file('inc/metaboxes.php')){
		require_once('inc/metaboxes.php');
	}

  define( 'JSPATH', get_template_directory_uri() . '/js/' );
  define( 'CSSPATH', get_template_directory_uri() . '/css/' );
  define( 'THEMEPATH', get_template_directory_uri() . '/' );
  define( 'SITEURL', site_url('/') );

  // REMOVE EMOJI SCRIPTS & STYLES /////////////////////////////////////////////////////
  if (!is_admin()) {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'template_redirect', 'rest_output_link_header', 11 );
  }

  /**
   * Sets off woocommerce breadcrumbs in shop page
  */
  function remove_shop_breadcrumbs(){
    if(function_exists('is_shop')):
      if (is_shop()||is_page()){
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
      }
    endif;
  }
  add_action('template_redirect', 'remove_shop_breadcrumbs' );

  if ( ! function_exists( 'wbt_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features.
    */
    function wbt_setup() {
      /*
      * Make theme available for translation.
      * Translations can be filed in the /languages/ directory.
      * If you're building a theme based on _s, use a find and replace
      * to change '_s' to the name of your theme in all the template files.
      */
      load_theme_textdomain( 'web-base-theme', get_template_directory() . '/languages' );
      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support('html5', array(
        'search-form','comment-form','comment-list','gallery','caption','style','script'
      ));
      add_theme_support( 'customize-selective-refresh-widgets' );
      add_theme_support( 'custom-logo', array(
        'height'=> 250,'width'=> 250,'flex-width'=> true,'flex-height'=> true,
      ));
      add_theme_support( 'amp' );
      add_theme_support( 'post-formats', array( 'galerias', 'video', 'audio' ) );

      //Support for guenberg block styles

      //Support for align wide
      add_theme_support( 'align-wide' );

      //support for Woocommerce
      add_theme_support( 'woocommerce' );

      // This theme uses wp_nav_menu() in two locations.
      register_nav_menus(array(
        'menu-1' => esc_html__( 'Primary', 'web-base-theme' ),
        'menu-2' => esc_html__( 'Secondary', 'web-base-theme' )
      ));
    }
  endif;
  add_action( 'after_setup_theme', 'wbt_setup' );

  function mytheme_custom_excerpt_length( $length ) {
    return 15;
  }
  add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


  /**
   * Custom helper functions for this theme.
   */
  require get_template_directory() . '/inc/helper-functions.php';

  /**
	 * Produces cleaner filenames for uploads
	 * @param  string $filename
	 * @return string
	 */
	function wbt_sanitize_file_name( $filename ) {
    $sanitized_filename = remove_accents( $filename ); // Convert to ASCII
    // Standard replacements
    $invalid = array(' '   => '-','%20' => '-','_'   => '-',);
	  $sanitized_filename = str_replace( array_keys( $invalid ), array_values( $invalid ), $sanitized_filename );
	  $sanitized_filename = preg_replace('/[^A-Za-z0-9-\. ]/', '', $sanitized_filename); // Remove all non-alphanumeric except .
	  $sanitized_filename = preg_replace('/\.(?=.*\.)/', '', $sanitized_filename); // Remove all but last .
	  $sanitized_filename = preg_replace('/-+/', '-', $sanitized_filename); // Replace any more than one - in a row
	  $sanitized_filename = str_replace('-.', '.', $sanitized_filename); // Remove last - if at the end
	  $sanitized_filename = strtolower( $sanitized_filename ); // Lowercase
    return $sanitized_filename;
	}
	add_filter( 'sanitize_file_name', 'wbt_sanitize_file_name', 10, 1 );

  /**
	 * [wbt_disallow_insert_term]
	 * Previene la creación de nuevas etiquetas por parte de los editores
	 * @param [Object] $term
	 * @param [String] $taxonomy
	 * @return [Object] $term
	 * La función se ejecuta en el filtro: pre_insert_term
	*/
	function wbt_disallow_insert_term($term, $taxonomy) {
	    $user = wp_get_current_user();
	    if ( ($taxonomy === 'post_tag' OR $taxonomy === 'tema') && in_array('editor', $user->roles) ) {
	        return new WP_Error(
	            'wbt_disallow_insert_term',
	            __('Your role does not have permission to add terms to this taxonomy')
	        );
	    }
	    return $term;
	}
	add_filter('pre_insert_term', 'wbt_disallow_insert_term', 10, 2);

  /**
	 * Fix for the slow SQL_CALC_FOUND_ROWS
   * @author Holkan Luna
   * @param [Array] $clauses
   * @param [Object] $wp_query
   * @return [Array] $clauses
	*/
	function wbt_set_found_posts($clauses, $wp_query = null){
		global $wp_query;
		// Don't proceed if is singular page
		if($wp_query->is_singular()){
			return $clauses;
		}

		global $wpdb;

		//Check if clauses are set
		$where = isset($clauses['where']) ? $clauses['where'] : "" ;
		$join = isset($clauses['join']) ? $clauses['join'] : "" ;
		$distinct = isset($clauses['distinct']) ? $clauses['distinct'] : "" ;

		//Construct and run the query. Set the result as the 'found_posts'
		//param on the main query we want to run
		$wp_query->found_posts = $wpdb->get_var("SELECT $distinct COUNT(*) FROM {$wpdb->posts} $join WHERE 1=1 $where");
		//Calculate how many posts per page should be
		$posts_per_page = (!empty($wp_query->query_vars['posts_per_page'])) ? absint($wp_query->query_vars['posts_per_page']) : absint(get_option('posts_per_page'));
		//Set the max_num_pages
		$wp_query->max_num_pages = ceil($wp_query->found_posts / $posts_per_page);

		//return the $clauses so the main query can run
		return $clauses;
	}
	add_filter('posts_clauses', 'wbt_set_found_posts');

  if ( function_exists('add_image_size') ) {
    add_image_size( 'large_1280', 1280, 720, true );
    add_image_size( 'featured_1024', 1024, 576, true );
    add_image_size( 'featured_480', 480, 720, true );
    add_image_size( 'middle_480', 480, 270, true );
  }

   /**
   * Set the content width in pixels, based on the theme's design and stylesheet.
   * Priority 0 to make it available to lower priority callbacks.
   * @global int $content_width
   */
  function wbt_content_width() {
  	$GLOBALS['content_width'] = apply_filters( 'wbt_content_width', 640 );
  }
  add_action( 'after_setup_theme', 'wbt_content_width', 0 );

  /**
   * Register widget area.
   * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
   */
  function wbt_widgets_init() {
  	register_sidebar(
  		array(
  			'name'          => esc_html__( 'Sidebar', 'web-base-theme' ),
  			'id'            => 'sidebar-1',
  			'description'   => esc_html__( 'Add widgets here.', 'web-base-theme' ),
  			'before_widget' => '<section id="%1$s" class="widget %2$s">',
  			'after_widget'  => '</section>',
  			'before_title'  => '<h2 class="widget-title">',
  			'after_title'   => '</h2>',
  		)
  	);
  }
  add_action( 'widgets_init', 'wbt_widgets_init' );

  // Remove Wocommerce styles
  add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
  
  /**
   * Enqueue scripts and styles.
   */
  function wbt_scripts() {

    wp_deregister_script('woocommerce-general');
    wp_deregister_script('woocommerce-smallscreen');
    wp_deregister_script('woocommerce-layout');

  	wp_enqueue_style('wbt-style', get_stylesheet_uri(), array(), _S_VERSION);
  	wp_style_add_data('wbt-style', 'rtl', 'replace');

    wp_register_script("wbt-fitvids", JSPATH . "fitvids.js", array("jquery"), _S_VERSION, true);

    wp_enqueue_script("wbt-fitvids");
  	wp_enqueue_script( 'wbt-javascript', get_template_directory_uri() . '/dist/index.bundle.js', array("jquery"), _S_VERSION, true );
  }
  add_action( 'wp_enqueue_scripts', 'wbt_scripts' );
  

  /**
   * Load Jetpack compatibility file.
   */
  if ( defined( 'JETPACK__VERSION' ) ) {
  	require get_template_directory() . '/inc/jetpack.php';
  }

  add_action("pre_get_posts", function($query){
    if(is_admin()){
      return;
    }

    if($query->is_main_query()){
      if(is_front_page()){
        $query->set("cat", "-3");
        $query->set("posts_per_page", "6");
      }
    }
  });

  /**
   * DEBUG
  */
  function debug($var){
    echo '<pre>';
      print_r($var);
    echo '</pre>';
  }

/* 
  WOOCOMMERCE
*/
  remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); //Elimina el elemento precio de la descripción de producto en el loop del archive
  add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_price', 9 ); //Agrega el precio al widget parent para poderlo acomodar sobre la imagen
  remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

  remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
  remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

  add_filter('woocommerce_enable_order_notes_field', '__return_false');
  


