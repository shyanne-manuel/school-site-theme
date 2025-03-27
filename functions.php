<?php

function schoolsite_enqueues() {
	// Load style.css on the front-end
	// Parameters: Unique handle, Source, Dependencies, Version number, Media
	wp_enqueue_style( 
		'schoolsite-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

    // Load normalize.css on the front-end
    wp_enqueue_style( 
        'schoolsite-normalize', 
        get_theme_file_uri( 'assets/css/normalize.css'), 
        array(), 
        '12.1.0'
    );

   
 // Lightgallery Plugin Codes Starts here
 if ( is_front_page()) {
        
    // Load lightgallery css
    wp_enqueue_style( 
        'lightgallery-css',
        get_theme_file_uri( 'assets/css/lightgallery-bundle.min.css'), 
        array(), 
        wp_get_theme()->get( 'Version' )
    );


    // Load lightgallery script
    wp_enqueue_script(
        'schoolsite-lightgallery-script',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/lightgallery.min.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        array('strategy' => 'defer')
    );

    // Enqueue Custom Settings Script
    wp_enqueue_script(
        'custom-lightgallery-init',
        get_theme_file_uri('assets/js/lightgallery-settings.js'),
        array('schoolsite-lightgallery-script'),
        wp_get_theme()->get( 'Version' ),
        array('strategy' => 'defer')
    );

    // wp_enqueue_script(
    //     'custom-lightgallery-thumbnail',
    //     get_template_directory_uri() . 'assets/js/lightgallery-settings.js',
    //     array('lightgallery-js'),
    //     wp_get_theme()->get( 'Version' ),
    //     array('strategy' => 'defer')
    // );

};
// Lightgallery Plugin Codes Ends here

}
add_action( 'wp_enqueue_scripts', 'schoolsite_enqueues' );


function schoolsite_setup() {
    // Adds style to the editor
    add_editor_style(get_stylesheet_uri());
}

add_action( 'after_setup_theme', 'schoolsite_setup' );


// Calling Custom Post Types & Custom Taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';



// Changing placeholder title text for adding ne Staff post start code
function staff_title_placeholder( $title, $post) {
    if ( $post->post_type == 'fwd-staff') {
        $staff_title = 'Add staff name';
        return $staff_title;
    }
    return $title;
}
add_filter( 'enter_title_here', 'staff_title_placeholder', 10, 2 );
// Changing placeholder title text for adding ne Staff post end code