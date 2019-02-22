<?php

function fn_after_setup()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");

    // MENU
    register_nav_menu("primary", __('Primary Menu', 'USURA'));


    
}