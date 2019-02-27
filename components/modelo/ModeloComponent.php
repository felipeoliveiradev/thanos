<?php 
$Base = new BaseComponent('Modelo');

 function ModeloComponent(){
     $ModeloFrontend = new ComponentFrontend('Modelo');
     $ModeloBackend =  new ComponentBackend('Modelo', 'ModeloController');
    Timber::render( array(
        $ModeloFrontend->url
    ), $ModeloBackend->context);
}

?>
