<?php
/*
Plugin Name: Add ACF Options Page
Plugin URI: http://identafire.com
Description: Adds an options page (built in ACF pro) to the theme.
Version: 1
Author: Aaron Joseph
Author URI: http://identafire.com
License: All Rights Reserved
*/

add_action('init', function () {
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    acf_add_options_page([
        'page_title'    => 'idf Options',
        'menu_title'    => 'idf options',
        'menu_slug'     => 'idf-options',
        'capability'    => 'edit_posts',
        'parent_slug'   => '',
        'position'      => 7, // Below 'Dashboard' menu item
        'icon_url'      => 'dashicons-admin-generic'
    ]);
});
