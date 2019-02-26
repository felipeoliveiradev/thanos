<?php
class Component
{

    public function __construct($nameComponent, $type, $page)
    {

        include get_template_directory() . "/components/$nameComponent/$type/$page.php";
    }
}


?>