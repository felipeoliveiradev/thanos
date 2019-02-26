<?php
    Class RequirementsSettings {
        public function __construct($path){
            require get_template_directory() . "/settings/requirements/$path/setup.php";
        }
    }
?>