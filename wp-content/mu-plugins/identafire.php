<?php
/*
Plugin Name: idf setup
Plugin URI: http://identafire.com
Description: Places ACF JSON folder in field-groups directory; loads modules
Version: 1
Author: Aaron Joseph
Author URI: http://identafire.com
License: All Rights Reserved
*/

// @ mu-plugins/identafire.php

/**
 * Place ACF JSON in field-groups directory
 */
add_filter('acf/settings/save_json', function ($path) {
    return dirname(__FILE__) . '/identafire/field-groups';
});
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = dirname(__FILE__) . '/identafire/field-groups';
    return $paths;
});
/**
*Load Modules
*/
require_once(dirname(__FILE__)) . '/identafire/post-types/portfolio.php';
require_once(dirname(__FILE__)) . '/identafire/post-types/clients.php';
require_once(dirname(__FILE__)) . '/identafire/options-screen.php';
