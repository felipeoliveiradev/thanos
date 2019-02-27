<?php

   // Está função, é responsavel por importar as setups da pagina settings

    class ExternalSetup
    {
        public function __construct($namePath, $path = null, $page = null)
        {
            if(empty($path)){
                if(empty($page)){
                    include get_template_directory() . "/$namePath/setup.php";
                }else{
                    include get_template_directory() . "/$namePath/$page.php";
                }
                
            }else{
                if(empty($page)){
                    include get_template_directory() . "/$namePath/$path/setup.php";
                }else{
                    include get_template_directory() . "/$namePath/$path/$page.php";
                }
            }
        }
    }
?>