<?php 
$Base = new BaseComponent('blogHome');

 function BlogHomeComponent($array=null){
     $BlogHomeFrontend = new ComponentFrontend('blogHome');
     $BlogHomeBackend =  new ComponentBackend('blogHome', 'BlogHomeController', $array);
    Timber::render( array(
        $BlogHomeFrontend->url
    ), $BlogHomeBackend->context);
}

?>
