<?php 
function university_files() {
    wp_enqueue_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
    wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
    wp_enqueue_style('Font_Awesome');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_script('main_js_file', get_theme_file_uri('script.js'), ('jquery'), '1.0', true);
}

add_action ('wp_enqueue_scripts', 'university_files');
?>