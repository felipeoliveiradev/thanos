<?php

function fn_theme_styles()
{

    //CSS
    wp_enqueue_style("hover_css", get_template_directory_uri() . '/public/extra/plugin/hover/css/hover.css');
    wp_enqueue_style("bootstrap_grid_css", get_template_directory_uri() . '/public/assets/bootstrap.grid.min.css');
    wp_enqueue_style("template_css", get_template_directory_uri() . '/public/css/style.css');

    // CSS PLUGINS
    wp_enqueue_style("icons_css", get_template_directory_uri() . '/public/extra/plugin/fontawesome/css/all.css');
    wp_enqueue_style("icons_mirage_css", get_template_directory_uri() . '/public/extra/plugin/mirageIcons/all.css');

    wp_enqueue_style("slick_css", get_template_directory_uri() . '/public/extra/plugin/slick/style.css');
    wp_enqueue_style("aosScroll_css", get_template_directory_uri() . '/public/extra/plugin/aosScroll/style.css');

    //JAVASCRIPT

    wp_enqueue_script("jquery", get_template_directory_uri() . '/public/js/menu.js', array('jquery'), false, true);
    wp_enqueue_script("bootstrap_js", get_template_directory_uri() . '/public/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("bundle_js", get_template_directory_uri() . '/public/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script("slider_js", get_template_directory_uri() . '/public/js/slider.js', array('jquery'), false, true);
    wp_enqueue_script("Scroll_js", get_template_directory_uri() . '/public/js/scroll.js', array('jquery'), false, true);

    //JAVASCRIPT PLUGIN
    wp_enqueue_script("slick_js", get_template_directory_uri() . '/public/extra/plugin/slick/main.js', array('jquery'), false, true);
    wp_enqueue_script("jquery_js", get_template_directory_uri() . '/public/extra/plugin/jquery/jquery.min.js', true, false);
    wp_enqueue_script("jquery_sticky_js", get_template_directory_uri() . '/public/extra/plugin/jquery/sticky.min.js', array('jquery'), true, false);
    wp_enqueue_script("aosScroll_js", get_template_directory_uri() . '/public/extra/plugin/aosScroll/main.js', array('jquery'), true, false);
    wp_enqueue_script("modal_js", get_template_directory_uri() . '/public/extra/plugin/modal/main.js', array('jquery'), true, true);

}