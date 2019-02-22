<?php

function fn_after_setup()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");

    register_nav_menu("top", "Menu Superior");
    register_nav_menu("top_menu", "Menu Topo Acessorios");
}