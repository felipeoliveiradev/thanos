<?php 
$Base = new BaseComponent('title');

 function TitleComponent($title=null, $subtitle=null){
     $array = array('title' => $title, 'subtitle' => $subtitle);
     $TitleFrontend = new ComponentFrontend('title');
     $TitleBackend =  new ComponentBackend('title', 'TitleController', $array);
    Timber::render( array(
        $TitleFrontend->url
    ), $TitleBackend->context);
}

?>
