<?php

add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
    $twig->addFunction( new Timber\Twig_Function('ImportCssComponent', 'ImportCssComponent') );
    return $twig;
} );

function ImportCssComponent($namepath, $file){
    echo '
    <link href="'.get_template_directory_uri().'/components/'.$namepath.'/assets/css/'.$file.'.css" rel=/"stylesheet/" type="text/css"/>
    ';

}

?>
