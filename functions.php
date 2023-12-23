<?php

function frosty_theme_support(){
add_theme_support('title-tag');
}

add_action('after_theme_setup', 'frosty_theme_support');

function frosty_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action( 'init', 'frosty_menus');
function frosty_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('frosty-style', get_template_directory_uri() . "/style.css", arrar('frosty-bootstrap'), $version , 'all');
    wp_enqueue_style('frosty-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh", arrar(), '4.4.1', 'all');
    wp_enqueue_style('frosty-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", arrar(), '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'frosty_register_styles'); 

function frosty_register_scripts(){

    wp_enqueue_script('frosty-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('frosty-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous', array(), '1.16.0', true);
    wp_enqueue_script('frosty-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', array(), '4.4.1' true);
    wp_enqueue_script('frosty-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);




}

add_action('wp_enqueue_scripts', 'frosty_register_scripts'); 
?>