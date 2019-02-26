<?php

   // Está função, é responsavel por importar as setups da pagina settings

    class SettingsSetup
    {
        public function __construct($path, $page = null)
        {
            if(empty($page)){
                include get_template_directory() . "/settings/$path/setup.php";
            }else{
                include get_template_directory() . "/settings/$path/$page.php";
            }
    
        }
    }
?>