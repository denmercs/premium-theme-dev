<?php 
    function __themename_assets() {
        wp_enqueue_style( '__themename-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0.0', 'all' );
        wp_enqueue_script( '__themename-stylesheet', get_template_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], '1.0.0', true );
        // wp_enqueue_script( 'jquery' );
    }

    add_action('wp_enqueue_scripts', '__themename_assets');

    function __themename_admin_assets() {
        wp_enqueue_style( '__themename-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0.0', 'all' );

        wp_enqueue_script( '__themename-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', [], '1.0.0', true );
    }

    add_action('admin_enqueue_scripts', '__themename_admin_assets');
?>