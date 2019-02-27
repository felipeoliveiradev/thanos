<?php 
$Base = new BaseComponent('commercialBar');

 function CommercialBarComponent(){
     $ModeloFrontend = new ComponentFrontend('commercialBar');
     $ModeloBackend =  new ComponentBackend('commercialBar', 'CommercialBarController');
    Timber::render( array(
        $ModeloFrontend->url
    ), $ModeloBackend->context);
}

?>
