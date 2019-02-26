<?php

class ComponentFrontend
{
   
    public function __construct($nameComponent, $page = null)
    {
        if(empty($page)){
            $this->url = "/components/$nameComponent/frontend/view.twig";    
             
        }else{
            $this->url = "/components/$nameComponent/frontend/$page.php";
            
        }
    }
    public function getUrl(){
        return $this->url;
    }
}

?>