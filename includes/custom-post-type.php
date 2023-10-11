<?php 

function blog_custom_post() {


    $servicesPost_label = array (
        'name'          => __('Services Post', 'textdomain'),
        'singular_name' => __('Services Post', 'textdomain'),
        'add_new'       => __('Add Services Post', 'textdomain'),
        'add_new_item'  => __('Add New Services Post', 'textdomain'),
        'edit_item'     => __('Edit Services Post', 'textdomain'),
        'all_items'     => __('Services Post', 'textdomain')
    );
    $servicesPost_args = array(
        'labels'            => $servicesPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('servicesPost', $servicesPost_args);

}
add_action('init', 'blog_custom_post');