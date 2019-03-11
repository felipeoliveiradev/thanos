<?php 
$Base = new BaseComponent('barFooter');

 function BarFooterComponent($title=null, $subtitle=null){
     $array = array('title' => $title, 'subtitle' => $subtitle);
     $BarFooterFrontend = new ComponentFrontend('barFooter');
     $BarFooterBackend =  new ComponentBackend('barFooter', 'BarFooterController', $array);
    Timber::render( array(
        $BarFooterFrontend->url
    ), $BarFooterBackend->context);
}

?>
