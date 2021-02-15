<?php
function ducati_themename_custom_logo_setup() {
	 $defaults = array(
	 'height'      => 100,
	 'width'       => 400,
	 'flex-height' => true,
	 'flex-width'  => true,
	 'header-text' => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
	 );
	 add_theme_support( 'custom-logo', $defaults );
	 add_theme_support('title-tag');
	 add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'ducati_themename_custom_logo_setup' );



	function ducati_menus(){
		$locations=array(
			'primary'=>'menu on header',
			'footer' =>'menu on footer'
		);
		register_nav_menus($locations);
	}
	add_action('init','ducati_menus');

	function ducati_register_style(){
	  $version=wp_get_theme()->get('Version');
	  wp_enqueue_style( 'ducati-bootstrapcdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all' );
	  wp_enqueue_style( 'ducati-fontawsomecdn', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all' );
	  wp_enqueue_style( 'ducati-style', get_theme_file_uri()."/style.css", array('ducati-bootstrapcdn','ducati-fontawsomecdn'), $version, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'ducati_register_style' );

	function ducati_register_scripts(){
	  $version=wp_get_theme()->get('Version');
	 // wp_enqueue_script( 'ducati-jQuery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true );
	 // wp_enqueue_script( 'ducati-bootstrapcdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2', true );
	  wp_enqueue_script( 'ducati-uhm8ljm', get_theme_file_uri()."/assets/js/uhm8ljm.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-Calculator', get_theme_file_uri()."/assets/js/Calculator.min.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-ducati', get_theme_file_uri()."/assets/js/ducati.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-ducati.addons', get_theme_file_uri()."/assets/js/ducati.addons.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-Finalorg', get_theme_file_uri()."/assets/js/3_3_3.Finalorg.ajax4jsf.javascript.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-desktopAjax', get_theme_file_uri()."/assets/js/desktopAjax.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-functions', get_theme_file_uri()."/assets/js/functions.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-main', get_theme_file_uri()."/assets/js/main.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-NetworkTracking', get_theme_file_uri()."/assets/js/NetworkTracking.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-picklist4', get_theme_file_uri()."/assets/js/picklist4.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-stub', get_theme_file_uri()."/assets/js/stub.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-VFRemote', get_theme_file_uri()."/assets/js/VFRemote.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-VFState', get_theme_file_uri()."/assets/js/VFState.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-widgets', get_theme_file_uri()."/assets/js/widgets.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-en_US', get_theme_file_uri()."/assets/js/en_US.js", array(), $version, true );
	 // wp_enqueue_script( 'ducati-dealerlocator', get_theme_file_uri()."/assets/js/dealerlocator.js", array(), $version, true );
	}
	add_action( 'wp_enqueue_scripts', 'ducati_register_scripts' );

	add_action( 'wp_ajax_bc_ajax_request', 'bc_ajax_request_fn' ); 
	function bc_ajax_request_fn(){
	$html ='';
	$html .= bc_get_wp_editor('Test Message','primary_editor',array());
	return $html;
	}
	

	register_sidebar( 
		array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) 
	);
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	function myplugin_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
   // register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );


function blog_scripts() {
    // Register the script
    wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/assets/js/custom.js', array('jquery'), false, true );
 
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'load_more_posts' ),
    );
    wp_localize_script( 'custom-script', 'blog', $script_data_array );
 
    // Enqueued script with localized data.
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'order'    => 'DESC',
        'paged' => $paged,
    );
    $blog_posts = new WP_Query( $args );
     if ( $blog_posts->have_posts() ) : 
         while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
			include 'post_card.php';
		endwhile; 
    endif;
 
    wp_die();
}


//taxnomy for pages
add_action( 'init', 'pages_tax' );
function pages_tax() {
    register_taxonomy(
        'subject',
        'page',
        array(
            'label' => __( 'Subject' ),
            'rewrite' => array( 'slug' => 'subject' ),
            'hierarchical' => true,
        )
    );
}

add_action( 'wp_ajax_f711_get_post_content', 'f711_get_post_content_callback' );
function f711_get_post_content_callback() {

    // retrieve post_id, and sanitize it to enhance security
    $post_id = intval($_POST['post_id'] );

     $args = array('child_of' => $post_id);
    $subcategories = get_categories( $args );
    
    foreach ($subcategories as $key => $value) {
       ?>
       <option value="<?php echo $value->term_id; ?>"> <?php echo $value->name; ?> </option>
             <?php
    }
    die();

}
?>