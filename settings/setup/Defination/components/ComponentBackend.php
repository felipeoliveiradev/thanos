<?php

class ComponentBackend
{
    public $context = "";
    public function __construct($nameComponent, $page = null)
    {
        if(empty($page)){
        include get_template_directory() . "/components/$nameComponent/backend/Controller.php";    
        $this->context = $context;
        }else{
            include get_template_directory() . "/components/$nameComponent/backend/$page.php";
            $this->context = $context;
        }
    }
}

?>