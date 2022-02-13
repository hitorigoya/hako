<?php

function hako_theme_setup()
{
    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');

    add_theme_support('editor-styles');

    add_theme_support('wp-block-styles');
}

add_action('after_setup_theme', 'hako_theme_setup');

function hako_theme_scripts()
{
    wp_enqueue_style('hako-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'hako_theme_scripts');
