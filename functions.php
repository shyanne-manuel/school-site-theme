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
}
add_action( 'wp_enqueue_scripts', 'schoolsite_enqueues' );


function schoolsite_setup() {
    // Adds style to the editor
    add_editor_style(get_stylesheet_uri());
}

add_action( 'after_setup_theme', 'schoolsite_setup' );

