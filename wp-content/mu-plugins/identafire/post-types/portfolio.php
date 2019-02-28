<?php
/*
Plugin Name: Create Portfolio Post Type
Plugin URI: http://identafire.com
Description: Adds a portfolio post type
Version: 1
Author: Aaron Joseph
Author URI: http://identafire.com
License: All Rights Reserved
*/

add_action( 'init', 'idf_create_portfolio_post_type' );

function idf_create_portfolio_post_type() {
	//Begin Custom Post Types
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Project' ),
				'new_item' => __( 'New Project' ),
				'edit_item' => __( 'Edit Project' ),
				'edit' => __( 'Edit Project' ),
				'new_item' => __( 'New Project' ),
				'view_item' => __( 'View Project' ),
				'add_new_item' => __( 'Add New Project' ),
                'slug' => __( 'portfolio-project' )
			),
			'public' => true,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'menu_position' => 5,
            'has_archive' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-portfolio',
            'show_ui' => true,
			'supports' => array( 'title', 'thumbnail', 'editor', 'revisions', 'page-attributes', 'excerpt' )
        )
	);
	
	//End Custom Post Types
}
