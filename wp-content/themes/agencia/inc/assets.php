<?php 
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/style.6b54f5b7.css');
    wp_enqueue_style('fix', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.fb6bbcaf.js', [], false, true);
});