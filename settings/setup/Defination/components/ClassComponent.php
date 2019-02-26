<?php 
class ClassComponent{
    public function __construct($nameComponent)
    {
        include get_template_directory() . "/settings/components/$nameComponent/Class$nameComponent.php";
    }
}