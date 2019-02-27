<?php
        add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
        $twig->addFunction( new Timber\Twig_Function('ImagePublic', 'ImagePublic'));
        return $twig;
        });
       function ImagePublic(){
                echo get_template_directory_uri().'/public/image/';
        }        


?>