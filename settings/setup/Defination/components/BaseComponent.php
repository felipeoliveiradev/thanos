<?php
    class BaseComponent{
        public $namepathcomponent = "";
        public function __construct($namepathcomponent){
                $this->namepathcomponent = $namepathcomponent;
                add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
                $nameUcfirst = ucfirst($this->namepathcomponent);
                $name = $nameUcfirst ."Component";
                $twig->addFunction( new Timber\Twig_Function($name, $name) );
                return $twig;
            } );
        }        
    }

?>