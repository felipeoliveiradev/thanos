<?php 
$Base = new BaseComponent('about');

 function AboutComponent($array=null){
     $AboutFrontend = new ComponentFrontend('about');
     $AboutBackend =  new ComponentBackend('about', 'AboutController', $array);
    Timber::render( array(
        $AboutFrontend->url
    ), $AboutBackend->context);
}

?>
