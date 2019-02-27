<?php 
class ClassComponent{
    public function __construct($nameComponent)
    {
        include get_template_directory() . "/components/$nameComponent/setup.php";
    }
}