<?php

function bantu_and_bantu_post_types()
{
    register_post_type('testimonial', array(
        'public' => true,
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon' => 'dashicons-format-chat',
        'menu_position' => 5,
        'supports' => array(
            'thumbnail',
            'editor',
            'title',
            'excerpt',
            'revisions'
        )
    ));
    
    register_post_type('service', array(
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-editor-ol',
        'menu_position' => 5,
        'supports' => array(
            'title',
            'excerpt',
            'revisions'
        )
    ));
    
    register_post_type('attorney', array(
        'public' => true,
        'labels' => array(
            'name' => 'Attorneys',
            'add_new_item' => 'Add New Attorney',
            'edit_item' => 'Edit Attorney',
            'all_items' => 'All Attorneys',
            'singular_name' => 'Attorney'
        ),
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 5,
        'supports' => array(
            'thumbnail',
            'title',
            'excerpt',
            'revisions'
        )
    ));
}
add_action('init', 'bantu_and_bantu_post_types');

?>