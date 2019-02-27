<?php

add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
    $twig->addFunction( new Timber\Twig_Function('ImportJsComponent', 'ImportJsComponent') );
    return $twig;
} );

function ImportJsComponent($namepath, $file){
    echo '
    <script type="text/javascript" src="'.get_template_directory_uri().'/components/'.$namepath.'/assets/js/'.$file.'.js" defer="defer"></script>
    ';

}

?>
