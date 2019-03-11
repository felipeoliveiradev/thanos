<?php
    class BasePage{
        public $namepathpage = "";
        public function __construct($namepathpage){
                $this->namepathpage = $namepathpage;
                add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
                $nameUcfirst = ucfirst($this->namepathpage);
                $name = $nameUcfirst ."Page";
                $twig->addFunction( new Timber\Twig_Function($name, $name) );
                return $twig;
            } );
        }        
    }

?>