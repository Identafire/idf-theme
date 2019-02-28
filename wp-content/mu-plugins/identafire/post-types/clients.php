<?php
/*
Plugin Name: Create Clients Post Type
Plugin URI: http://identafire.com
Description: Adds a client post type
Version: 1
Author: Aaron Joseph
Author URI: http://identafire.com
License: All Rights Reserved
*/

add_action( 'init', 'idf_create_client_post_type' );

function idf_create_client_post_type() {
	//Begin Custom Post Types
	register_post_type( 'client',
		array(
			'labels' => array(
				'name' => __( 'Clients' ),
				'singular_name' => __( 'Client' ),
				'new_item' => __( 'New Client' ),
				'edit_item' => __( 'Edit Client' ),
				'edit' => __( 'Edit Client' ),
				'new_item' => __( 'New Client' ),
				'view_item' => __( 'View Client' ),
				'add_new_item' => __( 'Add New Client' ),
                'slug' => __( 'client' )
			),
			'public' => true,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'menu_position' => 6,
            'has_archive' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-businessman',
            'show_ui' => true,
			'supports' => array( 'title', 'thumbnail', 'editor', 'revisions', 'page-attributes', 'excerpt' )
        )
	);
	
	//End Custom Post Types
}
