<?php 
$Base = new BaseComponent('modelo');

 function ModeloComponent($title=null, $subtitle=null){
     $array = array('title' => $title, 'subtitle' => $subtitle);
     $ModeloFrontend = new ComponentFrontend('modelo');
     $ModeloBackend =  new ComponentBackend('modelo', 'ModeloController', $array);
    Timber::render( array(
        $ModeloFrontend->url
    ), $ModeloBackend->context);
}

?>
