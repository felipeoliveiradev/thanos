<header class="menuPrimary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-1 col-lg-1 left">
                <a href="<?php echo home_url() ?>"><img
                        src="<?php echo get_template_directory_uri() ?>/public/image/logo.png" alt=""></a> </div>
            <div class="col-sm-12 col-md-11 col-lg-11 center">



                <?php if(has_nav_menu('primary')){
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        
                    ));
                    
                } ?>
            </div>
        </div>
    </div>
</header>