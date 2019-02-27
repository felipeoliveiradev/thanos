<?php 
$Base = new BaseComponent('Slide');

 function SlideComponent(){
     $SlideFrontend = new ComponentFrontend('Slide');
     $SlideBackend =  new ComponentBackend('Slide', 'SlideController');
    Timber::render( array(
        $SlideFrontend->url
    ), $SlideBackend->context);
}

?>
