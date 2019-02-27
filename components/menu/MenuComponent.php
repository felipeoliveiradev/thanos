<?php 
$Base = new BaseComponent('Menu');

 function MenuComponent(){
     $MenuFrontend = new ComponentFrontend('Menu');
     $MenuBackend =  new ComponentBackend('Menu', 'MenuController');
    Timber::render( array(
        $MenuFrontend->url
    ), $MenuBackend->context);
}

?>
