<?php

//ACTIONS WORDPRESS REQUIRED
add_action("wp_enqueue_scripts", "fn_theme_styles");
add_action("after_setup_theme", "fn_after_setup");
add_action("widgets_init", "fn_widgets");
add_action("customize_register", "fn_custumizer_register");

//MENU




?>