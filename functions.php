<?php

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


//register custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu' 
    )
  );
}
add_action( 'init', 'register_my_menus' );

//register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function my_register_sidebars() {

	/* register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
            'class' => 'sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

    register_sidebar(    
    		array(
			'id' => 'footer',
			'name' => __( 'Footer Sidebar' ),
            'class' => 'footer-sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* repeat register_sidebar() code for additional sidebars. */
}

//add support for page excerpts
add_post_type_support( 'page', 'excerpt' );

//add support for post thumbnails
add_theme_support( 'post-thumbnails' );

// get child pages
function get_child_pages() {

	global $post;

	rewind_posts(); // stop any previous loops
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages

	while (have_posts()) : the_post();

		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt

		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
		echo '</article>';

	endwhile;

	// reset query
	wp_reset_query();

}

// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS & JS
    function wsma_styles() {
        wp_enqueue_style( 'wsma', get_stylesheet_uri() );

        //example add custom style
        //wp_enqueue_style( 'wsma-customcssexample', get_template_directory_uri() . '/example/example.css');
        
        
        // Font Awesome
        wp_enqueue_style('wsma-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', array(), null, 'all');

        //example add font
        //wp_enqueue_style( 'wsma-fontexample', 'http://fonts.googleapis.com/css?family=Libre+Baskerville');
        
        // Flexslider style
        wp_enqueue_style('wsma-flexslider-style', get_template_directory_uri() . '/css/flexslider.css', array(), null, 'all');

        

    }
    
    function wsma_scripts() {
        
        // unload bundled jQuery and load from cdn for faster load time
		wp_deregister_script('jquery');
        //load from cdn
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, false);
		//load jQuery before other js that require jQuery
        wp_enqueue_script('jquery');

        //true will load in footer which is usually what you want, false is header
        //20120206 is version number    
        wp_enqueue_script( 'wsma-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '20151021', true );

        wp_enqueue_script( 'wsma-bootstrap-hover-dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array('jquery'), '20151021', true );
     
        //Flexslider scripts
        wp_enqueue_script( 'wsma-flexslider-script', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20151021', true );

    }

    add_action( 'wp_enqueue_scripts', 'wsma_styles', 11 );
    add_action( 'wp_enqueue_scripts', 'wsma_scripts', 12 );
    }

//Create custom post type function
function create_posttype() {

	register_post_type( 'teachers',
	//  Options
		array(
			'labels' => array(
				'name' => __( 'Teachers' ),
				'singular_name' => __( 'Teachers' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'teachers'),
		)
	);
}
add_action( 'init', 'create_posttype' );
    
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Teachers', 'Post Type General Name', 'wsma' ),
		'singular_name'       => _x( 'Teacher', 'Post Type Singular Name', 'wsma' ),
		'menu_name'           => __( 'Teachers', 'wsma' ),
		'parent_item_colon'   => __( 'Parent Teacher', 'wsma' ),
		'all_items'           => __( 'All Teachers', 'wsma' ),
		'view_item'           => __( 'View Teacher', 'wsma' ),
		'add_new_item'        => __( 'Add New Teacher', 'wsma' ),
		'add_new'             => __( 'Add New', 'wsma' ),
		'edit_item'           => __( 'Edit Teacher', 'wsma' ),
		'update_item'         => __( 'Update Teacher', 'wsma' ),
		'search_items'        => __( 'Search Teacher', 'wsma' ),
		'not_found'           => __( 'Not Found', 'wsma' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wsma' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'teachers', 'wsma' ),
		'description'         => __( 'Movie news and reviews', 'wsma' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'classes' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'teachers', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );

//get the page slug
function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}



// get_id_by_slug('any-page-slug');
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}



// add categories for attachments 
function add_categories_for_attachments() {     
    register_taxonomy_for_object_type( 'category', 'attachment' );     
} 
add_action( 'init' , 'add_categories_for_attachments' ); 

// add tags for attachments 
function add_tags_for_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' ); 
} 
add_action( 'init' , 'add_tags_for_attachments' );

