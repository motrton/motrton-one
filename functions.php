<?php 

/**
 * Bootstrap scripts
 * Bootstrap CSS gets inclued directly in style.css
 */

// include the theme options
require_once ( get_template_directory() . '/theme-options.php' );
// Register Custom Gallery
require_once('wp_bootstrap_gallery.php');
// Register Custom Navigation Walker
require_once('twitter_bootstrap_nav_walker.php');


/**
 * ADD THE SCRIPTS
 *
 *
 */
// jquery ui


// wp_enqueue_script('jquery-ui-autocomplete', '', array('jquery-ui-widget', 'jquery-ui-position'), '1.8.6');

// bootstrap
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

//jq ui
add_action( 'wp_enqueue_scripts', 'jqueryui_scripts_with_jquery' );

//superfish scripts
add_action('wp_enqueue_scripts','superfish_script_with_jquery');
// add main JS
add_action('wp_enqueue_scripts','call_main_js');
/**
 * ADD THE CSS
 */
add_action('init', 'my_styles');

// register sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
// custom filter around content to get the link icon
add_filter( 'the_content', 'mytheme_content_ad' );
// add my personal debugger
add_action('wp_footer', 'show_template');





/**
 * This function registers the jqui js files
 * 
 */
function jqueryui_scripts_with_jquery(){
    // Register the script like this for a theme:
    wp_register_script( 'jq-ui-script', get_template_directory_uri() . '/js/jquery-ui-1.10.0.custom.min.js', array( 'jquery' ) );
        // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jq-ui-script' );
    }

/**
 * This function registers the bootstrap js files
 * 
 */
function wpbootstrap_scripts_with_jquery(){
    // Register the script like this for a theme:
    wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
        // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap-script' );
    }

/**
 * This adds the superfish script and the hoverintent to create the menu
 *
 */
function superfish_script_with_jquery(){
wp_register_script( 'hoverintent-script', get_template_directory_uri() . '/js/hoverIntent.js', array( 'jquery' ) );
wp_enqueue_script( 'hoverintent-script' );
wp_register_script( 'superfish-script', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ) );
wp_enqueue_script( 'superfish-script' );

}
/**
 * This calls my personal JS
 * 
 */
function call_main_js(){
wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
wp_enqueue_script( 'main-script' );
}


/**
 * all the css files
 * 
 */
function my_styles() {

    wp_register_style( 'superfish', get_template_directory_uri() . '/css/custom-superfish.css' );
    wp_enqueue_style( 'superfish' );

    wp_register_style( 'superfish-navbar', get_template_directory_uri() . '/css/custom-superfish-navbar.css' );
    wp_enqueue_style( 'superfish-navbar' );

    wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'font-awesome' );

    wp_register_style( 'overwrite', get_template_directory_uri() . '/css/overwrite.css' );
    wp_enqueue_style( 'overwrite' );

    wp_register_style( 'oo-naok-style', get_template_directory_uri() . '/css/oo-naok.css' );
    wp_enqueue_style( 'oo-naok-style' );

    wp_register_style( 'jqui', get_template_directory_uri() . '/css/jquery-ui-1.10.0.custom.css' );
    wp_enqueue_style( 'jqui' );

    wp_register_style( 'bs-responsive', get_template_directory_uri() . '/bootstrap/css/bootstrap-responsive.css' );
    wp_enqueue_style( 'bs-responsive' );

}


// add_action( 'init', 'myprefix_autocomplete_init' );


// function myprefix_autocomplete_init() {
//     // Register our jQuery UI style and our custom javascript file
//     wp_register_style('myprefix-jquery-ui','http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css');
//     wp_register_script( 'my_acsearch', get_template_directory_uri() . '/js/myacsearch.js', array('jquery','jquery-ui-autocomplete'),null,true);
// wp_localize_script( 'my_acsearch', 'MyAcSearch', array('url' => admin_url( 'admin-ajax.php' )));
//     // Function to fire whenever search form is displayed
//     add_action( 'get_search_form', 'myprefix_autocomplete_search_form' );

//     // Functions to deal with the AJAX request - one for logged in users, the other for non-logged in users.
//     add_action( 'wp_ajax_myprefix_autocompletesearch', 'myprefix_autocomplete_suggestions' );
//     add_action( 'wp_ajax_nopriv_myprefix_autocompletesearch', 'myprefix_autocomplete_suggestions' );
// }

// function myprefix_autocomplete_search_form(){  
//     wp_enqueue_script( 'my_acsearch' );  
//     wp_enqueue_style( 'myprefix-jquery-ui' );  
// } 

// function myprefix_autocomplete_suggestions(){  
//     // Query for suggestions  
//     $posts = get_posts( array(  
//         's' =>$_REQUEST['term'],  
//     ) );  
  
//     // Initialise suggestions array  
//     $suggestions=array();  
  
//     global $post;  
//     foreach ($posts as $post): setup_postdata($post);  
//         // Initialise suggestion array  
//         $suggestion = array();  
//         $suggestion['label'] = esc_html($post->post_title);  
//         $suggestion['link'] = get_permalink();  
  
//         // Add suggestion to suggestions array  
//         $suggestions[]= $suggestion;  
//     endforeach;  
  
//     // JSON encode and echo  
//     $response = $_GET["callback"] . "(" . json_encode($suggestions) . ")";  
//     echo $response;  
  
//     // Don't forget to exit!  
//     exit;  
// }  



// // custom menu
// add_action('init','register_custom_menu');
// function register_custom_menu(){
// register_nav_menu('primary',__('Custom Menu'));
// }

/**
 * [my_register_sidebars description]
 * @return [type] [description]
 */
function my_register_sidebars() {
	register_sidebar(
        array(
        'name' => 'primary',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}


// http://sivel.net/2009/03/adding-additional-links-to-the-output-from-wp_list_pages/
// add_filter('wp_list_pages', 'add_blog_link');
// function add_blog_link($output) {
//         $homeurl = get_bloginfo('url');
//         $output .= '<li><a href="'. $homeurl .'">Blog</a></li>';
//         return $output;
// }


//Filter content to add specific div around it
// needed to filter only contents posts
/**
 * [mytheme_content_ad description]
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
function mytheme_content_ad( $content ) {
    $prefix = '<div class="linked">';
    $suffix = '</div>';
    $filteredcontent = $prefix . $content .$suffix;
    return $filteredcontent;
}


// Add ID and CLASS attributes to the first <ul> occurence in wp_page_menu
// function add_menuclass($ulclass) {
// return preg_replace('/<ul>/', '<ul class="sf-menu sf-navbar">', $ulclass, 1);
// }
// add_filter('wp_page_menu','add_menuclass');




// DEVELOPMENT TOOL
// For debugging - show template file
function show_template() {

    $options = get_option('motrton-one_options');
    global $template;
   if($options['debugger'] == true){
    $file = substr( strrchr( $template , "/" ), 1) ;
    $heading = "<div style='padding-left:10%;' id='debuginfo'><h5> DEBUGINFO  </h5> deactivate from theme options<p>";
    $str1 = "Used template file --> <strong>" . $file . "</strong><br>";
    $str2 = "Current ID -->  <strong>" . get_the_ID() . "</strong><br>";
    $str3 = "Pages to Exclude --> <strong>" . $options['excludepages'] . "</strong><br>";
    $end = "</p></div>";

    print_r($heading . $str1 .$str2. $str3.  $end);
}
}

 ?>