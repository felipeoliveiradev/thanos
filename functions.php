<?php

require_once get_template_directory() . "/settings/setup.php";

add_action('wp_ajax_nopriv_ajax_action', 'ajax_loading');
add_action('wp_ajax_ajax_action', 'ajax_loading');
add_theme_support( 'post-thumbnails' );

function ajax_loading()
{
    switch ($_REQUEST['fn']) {
        case 'get_latest_posts':
            $output = ajax_get_latest_posts();
            break;
        default:
            $output = 'Error. No function specified.';
            break;
    }
    $output = json_encode($output);
    if (is_array($output)) {
        print_r($output);
    } else {
        echo $output;
    }
    die;
}

function ajax_get_latest_posts($count)
{

    $loop = get_metadata('product', '241');

    return $loop;
}