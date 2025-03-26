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
                'schoolsite-lightgallery-style',
                plugins_url( 'simple-lightgallery/assets/lightgallery/v1/css/lightgallery.min.css', __FILE__ ),
                array(),
                wp_get_theme()->get('Version'),
                'all'
            );
        
        
            // Load lightgallery script
            wp_enqueue_script(
                'schoolsite-lightgallery-script',
                plugins_url( 'simple-lightgallery/assets/lightgallery/v1/js/lightgallery.min.js', __FILE__ ),
                array(),
                wp_get_theme()->get( 'Version' ),
                array( 'strategy' => 'defer' )
            );
        
            // Enqueue Custom Settings Script
            wp_enqueue_script(
                'custom-lightgallery-init',
                get_template_directory_uri() . 'assets/js/lightgallery-settings.js',
                array('lightgallery-js'),
                null,
                true
            );

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