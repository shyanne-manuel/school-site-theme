<?php 


// Students
function schoolsite_custom_post_types() {
    $labels = array(
        'name'                     => _x( 'Students', 'post type general name', 'school-site-theme' ),
        'singular_name'            => _x( 'Student', 'post type singular name', 'school-site-theme' ),
        'add_new'                  => _x( 'Add New', 'Student', 'school-site-theme' ),
        'add_new_item'             => __( 'Add Student Name', 'school-site-theme' ),
        'edit_item'                => __( 'Edit Student', 'school-site-theme' ),
        'new_item'                 => __( 'New Student', 'school-site-theme' ),
        'view_item'                => __( 'View Student', 'school-site-theme' ),
        'view_items'               => __( 'View Students', 'school-site-theme' ),
        'search_items'             => __( 'Search Students', 'school-site-theme' ),
        'not_found'                => __( 'No students found.', 'school-site-theme' ),
        'not_found_in_trash'       => __( 'No students found in Trash.', 'school-site-theme' ),
        'parent_item_colon'        => __( 'Parent Students:', 'school-site-theme' ),
        'all_items'                => __( 'All Students', 'school-site-theme' ),
        'archives'                 => __( 'Student Archives', 'school-site-theme' ),
        'attributes'               => __( 'Student Attributes', 'school-site-theme' ),
        'insert_into_item'         => __( 'Insert into student', 'school-site-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this student', 'school-site-theme' ),
        'featured_image'           => __( 'Student featured image', 'school-site-theme' ),
        'set_featured_image'       => __( 'Set student featured image', 'school-site-theme' ),
        'remove_featured_image'    => __( 'Remove student featured image', 'school-site-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-site-theme' ),
        'menu_name'                => _x( 'Students', 'admin menu', 'school-site-theme' ),
        'filter_items_list'        => __( 'Filter students list', 'school-site-theme' ),
        'items_list_navigation'    => __( 'Students list navigation', 'school-site-theme' ),
        'items_list'               => __( 'Students list', 'school-site-theme' ),
        'item_published'           => __( 'Student published.', 'school-site-theme' ),
        'item_published_privately' => __( 'Student published privately.', 'school-site-theme' ),
        'item_revereted_to_draft'  => __( 'Student reverted to draft.', 'school-site-theme' ),
        'item_trashed'             => __( 'Student trashed.', 'school-site-theme' ),
        'item_scheduled'           => __( 'Student scheduled.', 'school-site-theme' ),
        'item_updated'             => __( 'Student updated.', 'school-site-theme' ),
        'item_link'                => __( 'Student link.', 'school-site-theme' ),
        'item_link_description'    => __( 'A link to a student.', 'school-site-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-student', $args );


// Staff CPT
$labels = array(
    'name'                     => _x( 'Staff', 'post type general name', 'school-site-theme' ),
    'singular_name'            => _x( 'Staff', 'post type singular name', 'school-site-theme' ),
    'add_new'                  => _x( 'Add New', 'Staff', 'school-site-theme' ),
    'add_new_item'             => __( 'Add New Staff', 'school-site-theme' ),
    'edit_item'                => __( 'Edit Staff', 'school-site-theme' ),
    'new_item'                 => __( 'New Staff', 'school-site-theme' ),
    'view_item'                => __( 'View Staff', 'school-site-theme' ),
    'view_items'               => __( 'View Staff', 'school-site-theme' ),
    'search_items'             => __( 'Search Staff', 'school-site-theme' ),
    'not_found'                => __( 'No staff found.', 'school-site-theme' ),
    'not_found_in_trash'       => __( 'No staff found in Trash.', 'school-site-theme' ),
    'parent_item_colon'        => __( 'Parent Staff:', 'school-site-theme' ),
    'all_items'                => __( 'All Staff', 'school-site-theme' ),
    'archives'                 => __( 'Staff Archives', 'school-site-theme' ),
    'attributes'               => __( 'Staff Attributes', 'school-site-theme' ),
    'insert_into_item'         => __( 'Insert into staff', 'school-site-theme' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this staff', 'school-site-theme' ),
    'featured_image'           => __( 'Staff featured image', 'school-site-theme' ),
    'set_featured_image'       => __( 'Set staff featured image', 'school-site-theme' ),
    'remove_featured_image'    => __( 'Remove staff featured image', 'school-site-theme' ),
    'use_featured_image'       => __( 'Use as featured image', 'school-site-theme' ),
    'menu_name'                => _x( 'Staff', 'admin menu', 'school-site-theme' ),
    'filter_items_list'        => __( 'Filter staff list', 'school-site-theme' ),
    'items_list_navigation'    => __( 'Staff list navigation', 'school-site-theme' ),
    'items_list'               => __( 'Staff list', 'school-site-theme' ),
    'item_published'           => __( 'Staff published.', 'school-site-theme' ),
    'item_published_privately' => __( 'Staff published privately.', 'school-site-theme' ),
    'item_revereted_to_draft'  => __( 'Staff reverted to draft.', 'school-site-theme' ),
    'item_trashed'             => __( 'Staff trashed.', 'school-site-theme' ),
    'item_scheduled'           => __( 'Staff scheduled.', 'school-site-theme' ),
    'item_updated'             => __( 'Staff updated.', 'school-site-theme' ),
    'item_link'                => __( 'Staff link.', 'school-site-theme' ),
    'item_link_description'    => __( 'A link to a staff.', 'school-site-theme' ),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_nav_menus'  => true,
    'show_in_admin_bar'  => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'staff' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-businessperson',
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'template'           => array( 
                                array( 'core/paragraph', array( 'placeholder' => __( 'Enter job title here...' ) ) ),
                                array( 'core/paragraph', array( 'placeholder' => __( 'Enter staff email here...' ) ) )
                            ),
    'template_lock'      => 'all'
);
register_post_type( 'fwd-staff', $args );


// Testimonial Custom Post Type
$labels = array(
    'name'                  => _x( 'Testimonials', 'post type general name', 'mindset-theme' ),
    'singular_name'         => _x( 'Testimonial', 'post type singular name', 'mindset-theme' ),
    'menu_name'             => _x( 'Testimonials', 'admin menu', 'mindset-theme' ),
    'add_new'               => _x( 'Add New', 'testimonial', 'mindset-theme' ),
    'add_new_item'          => __( 'Add New Testimonial', 'mindset-theme' ),
    'new_item'              => __( 'New Testimonial', 'mindset-theme' ),
    'edit_item'             => __( 'Edit Testimonial', 'mindset-theme' ),
    'view_item'             => __( 'View Testimonial', 'mindset-theme'  ),
    'all_items'             => __( 'All Testimonials', 'mindset-theme' ),
    'search_items'          => __( 'Search Testimonials', 'mindset-theme' ),
    'parent_item_colon'     => __( 'Parent Testimonials:', 'mindset-theme' ),
    'not_found'             => __( 'No testimonials found.', 'mindset-theme' ),
    'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'mindset-theme' ),
    'item_link'             => __( 'Testimonial link.', 'mindset-theme' ),
    'item_link_description' => __( 'A link to a testimonial.', 'mindset-theme' ),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testimonials' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 7,
    'menu_icon'          => 'dashicons-heart',
    'supports'           => array( 'title', 'editor' ),
    'template'           => array( array( 'core/pullquote' ) ),
    'template_lock'      => 'all'
);

register_post_type( 'fwd-testimonial', $args );

}
add_action( 'init', 'schoolsite_custom_post_types' );



// TAXONOMIES

// Students
function schoolsite_register_taxonomies() {
    $labels = array(
        'name'                  => _x( 'Student Categories', 'taxonomy general name', 'school-site-theme' ),
        'singular_name'         => _x( 'Student Category', 'taxonomy singular name', 'school-site-theme' ),
        'search_items'          => __( 'Search Student Categories', 'school-site-theme' ),
        'all_items'             => __( 'All Student Category', 'school-site-theme' ),
        'parent_item'           => __( 'Parent Student Category', 'school-site-theme' ),
        'parent_item_colon'     => __( 'Parent Student Category:', 'school-site-theme' ),
        'edit_item'             => __( 'Edit Student Category', 'school-site-theme' ),
        'view_item'             => __( 'View Student Category', 'school-site-theme' ),
        'update_item'           => __( 'Update Student Category', 'school-site-theme' ),
        'add_new_item'          => __( 'Add New Student Category', 'school-site-theme' ),
        'new_item_name'         => __( 'New Student Category Name', 'school-site-theme' ),
        'template_name'         => __( 'Student Category Archives', 'school-site-theme' ),
        'menu_name'             => __( 'Student Category', 'school-site-theme' ),
        'not_found'             => __( 'No student categories found.', 'school-site-theme' ),
        'no_terms'              => __( 'No student categories', 'school-site-theme' ),
        'items_list_navigation' => __( 'Student Categories list navigation', 'school-site-theme' ),
        'items_list'            => __( 'Student Categories list', 'school-site-theme' ),
        'item_link'             => __( 'Student Category Link', 'school-site-theme' ),
        'item_link_description' => __( 'A link to a student category.', 'school-site-theme' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'student-categories' ),
    );
    register_taxonomy( 'fwd-student-category', array( 'fwd-student' ), $args );


// Staff Taxonomy

$labels = array(
    'name'                  => _x( 'Staff Categories', 'taxonomy general name', 'school-site-theme' ),
    'singular_name'         => _x( 'Staff Category', 'taxonomy singular name', 'school-site-theme' ),
    'search_items'          => __( 'Search Staff Categories', 'school-site-theme' ),
    'all_items'             => __( 'All Staff Category', 'school-site-theme' ),
    'parent_item'           => __( 'Parent Staff Category', 'school-site-theme' ),
    'parent_item_colon'     => __( 'Parent Staff Category:', 'school-site-theme' ),
    'edit_item'             => __( 'Edit Staff Category', 'school-site-theme' ),
    'view_item'             => __( 'View Staff Category', 'school-site-theme' ),
    'update_item'           => __( 'Update Staff Category', 'school-site-theme' ),
    'add_new_item'          => __( 'Add New Staff Category', 'school-site-theme' ),
    'new_item_name'         => __( 'New Staff Category Name', 'school-site-theme' ),
    'template_name'         => __( 'Staff Category Archives', 'school-site-theme' ),
    'menu_name'             => __( 'Staff Category', 'school-site-theme' ),
    'not_found'             => __( 'No staff categories found.', 'school-site-theme' ),
    'no_terms'              => __( 'No staff categories', 'school-site-theme' ),
    'items_list_navigation' => __( 'Staff Categories list navigation', 'school-site-theme' ),
    'items_list'            => __( 'Staff Categories list', 'school-site-theme' ),
    'item_link'             => __( 'Staff Category Link', 'school-site-theme' ),
    'item_link_description' => __( 'A link to a staff category.', 'school-site-theme' ),
);
$args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_in_menu'      => true,
    'show_in_nav_menu'  => true,
    'show_in_rest'      => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'staff-categories' ),
    // adding capabilities to remove ability to manage edit and delete terms
    'capabilities'      => array(
        'manage_terms' => 'do_not_allow',
        'edit_terms'   => 'do_not_allow',
        'delete_terms' => 'do_not_allow',
        'assign_terms' => 'edit_posts'
    )
);
register_taxonomy( 'fwd-staff-category', array( 'fwd-staff' ), $args );


};
add_action( 'init', 'schoolsite_register_taxonomies' );




// Flush Rewrite Rules 
    function schoolsite_rewrite_flush() {
        schoolsite_register_custom_post_types();
        flush_rewrite_rules();
    }
    add_action( 'after_switch_theme', 'schoolsite_rewrite_flush' );