<?php

function theBlog_assets() {
    wp_enqueue_style('theBlog-style', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('tailwind-style','https://cdn.tailwindcss.com', true);
    wp_enqueue_style('theBlog-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
}

add_action('wp_enqueue_scripts', 'theBlog_assets');