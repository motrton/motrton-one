<?php 

/**
 * Bootstrap scripts
 * CSS gets inclued directly in style.css
 */

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
function wpbootstrap_scripts_with_jquery(){
    // Register the script like this for a theme:
    wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
        // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap-script' );
    }

/**
 * superfish scripts and CSS
 */

add_action('wp_enqueue_scripts','superfish_script_with_jquery');
function superfish_script_with_jquery(){
//     wp_enqueue_script(
//       'Name of the script, lowercase string',
//       'path to the file .js',
//       'array of scripts it depends on',
//       'version of  the script',
//       'boolean value to select whether you want to print the script in the footer or in the header'
// );
// 
wp_register_script( 'hoverintent-script', get_template_directory_uri() . '/js/hoverIntent.js', array( 'jquery' ) );
wp_enqueue_script( 'hoverintent-script' );
wp_register_script( 'superfish-script', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ) );
wp_enqueue_script( 'superfish-script' );


}

add_action('init', 'my_styles');
function my_styles() {
    wp_register_style( 'superfish', get_template_directory_uri() . '/css/superfish.css' );
    wp_enqueue_style( 'superfish' );

    // wp_register_style( 'superfish-navbar', get_template_directory_uri() . '/css/superfish-navbar.css' );
    // wp_enqueue_style( 'superfish-navbar' );

    wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'font-awesome' );

    wp_register_style( 'overwrite', get_template_directory_uri() . '/css/overwrite.css' );
    wp_enqueue_style( 'overwrite' );
}

/**
 * Call Main JS
 */

add_action('wp_enqueue_scripts','call_main_js');
function call_main_js(){

wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
 wp_enqueue_script( 'main-script' );
}


// custom menu
// add_action('init','register_custom_menu');
// function register_custom_menu(){
// register_nav_menu('primary',__('Custom Menu'));
// }


// sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
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
function mytheme_content_ad( $content ) {
    $prefix = '<div class="linked">';
    
    $suffix .= '</div>';

    $filteredcontent = $prefix . $content .$suffix;

    return $filteredcontent;
}
add_filter( 'the_content', 'mytheme_content_ad' );


// DEVELOPMENT TOOL

// For debugging - show template file
add_action('wp_footer', 'show_template');

function show_template() {
    global $template;
    $file = substr( strrchr( $template , "/" ), 1) ;
    print_r("<div style='padding-left:10%;'><h5> DEBUGINFO  </h5><p>Used template file --> <strong>" . $file . "</strong></p></div>");
}

 ?>