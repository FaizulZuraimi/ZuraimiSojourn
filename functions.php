<?php

// adding the CSS and Javascript files

function gt_setup() {
    wp_enqueue_style('google-fonts',"//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap");
    wp_enqueue_style('fontawesome',"//kit.fontawesome.com/cd8d15d8da.js");
    wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime());
    wp_enqueue_script("main",get_theme_file_uri('/js/main.js'),NULL,microtime(),true);
}


add_action('wp_enqueue_scripts','gt_setup');


// Adding theme support

function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'comment-form', 'search-form')
        );
}

add_action('after_setup_theme', 'gt_init');


// Sidebar

function gt_widgets() {
    register_sidebar(
        array(
            'name' => 'Main sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init','gt_widgets');


// Filters

function search_filter($query) {
    if($query->is_search()) {
        $query->set('post_type', array('post'));
    }

}


add_filter('pre_get_posts', 'search_filter');