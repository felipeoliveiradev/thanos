<?php 
 new BaseComponent('slide');
 function SlideComponent(){
     $ModeloFrontend = new ComponentFrontend('slide');
     $ModeloBackend =  new ComponentBackend('slide', 'SlideController');
    Timber::render( array(
        $ModeloFrontend->url
    ), $ModeloBackend->context);
}
?>
