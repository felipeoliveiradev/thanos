<?php 
    add_filter( 'timber/twig', function( \Twig_Environment $twig ) {

    $twig->addFunction( new Timber\Twig_Function( 'ModeloComponent', 'ModeloComponent' ) );
    return $twig;
} );

 function ModeloComponent(){
     $ModeloFrontend = new ComponentFrontend('modelo');
     $ModeloBackend = new ComponentBackend('modelo', 'ModeloController');

    Timber::render( array(
        $ModeloFrontend->url
    ), $ModeloBackend->context);
}
?>
