<?php 

define('INCLUDES_DIR', get_template_directory() . '/includes/');

include_once INCLUDES_DIR . 'general-wp-setup.php';
include_once INCLUDES_DIR . 'enqueue.php';
include_once INCLUDES_DIR . 'acf-sync.php';
include_once INCLUDES_DIR . 'getBlocks.php';
include_once INCLUDES_DIR . 'style-editor.php';
include_once INCLUDES_DIR . 'required-plugins.php';

add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
} );