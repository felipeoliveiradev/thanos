<?php
class ComponentsTwig
{
    public function __construct($nameComponent, $file = null)
    {
      
        if(empty($file))
            include get_template_directory() . "/components/$nameComponent/frontend/view.twig";
        else
            include get_template_directory() . "/components/$nameComponent/frontend/$file.twig";
        
    }
}
?>