<?php 
$Base = new BaseComponent('card');

 function CardComponent(){
     $CardFrontend = new ComponentFrontend('card');
     $CardBackend =  new ComponentBackend('card', 'CardController');
    Timber::render( array(
        $CardFrontend->url
    ), $CardBackend->context);
}

?>
