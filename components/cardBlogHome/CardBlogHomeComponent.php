<?php 
$Base = new BaseComponent('cardBlogHome');

 function CardBlogHomeComponent(){
     $CardBlogHomeFrontend = new ComponentFrontend('cardBlogHome');
     $CardBlogHomeBackend =  new ComponentBackend('cardBlogHome', 'CardBlogHomeController');
    Timber::render( array(
        $CardBlogHomeFrontend->url
    ), $CardBlogHomeBackend->context);
}

?>
