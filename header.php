<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

    <?php wp_head();?>
</head>

<body id="changepageajax" <?php body_class();?>>

    <?php
     new Components('menu', 'view');

    ?>