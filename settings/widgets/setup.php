<?php

function fn_widgets()
{
    register_sidebars(2, array('name' => 'Sidebar %d'));
    register_sidebar(array(
        'name' => __('Side Bar Menu', 'hostnoup_theme'),
        'id' => 'fn_footer_side_bar',
        'class' => 'menu vertical',
        'description' => __('Espaço reservado para os pilares do footer', 'hostnoup_theme'),
        'before_widget' => '<div id="%1$S" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

    ));
}

?>