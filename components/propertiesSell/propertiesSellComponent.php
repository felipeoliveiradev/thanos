<?php 
$Base = new BaseComponent('propertiesSell');

 function PropertiesSellComponent($title=null, $subtitle=null, $type=null){
     $array = array('title' => $title, 'subtitle' => $subtitle, 'type' => $type);
     $PropertiesSellFrontend = new ComponentFrontend('propertiesSell');
     $PropertiesSellBackend =  new ComponentBackend('propertiesSell', 'PropertiesSellController', $array);
    Timber::render( array(
        $PropertiesSellFrontend->url
    ), $PropertiesSellBackend->context);
}

?>
