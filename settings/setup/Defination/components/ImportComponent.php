<?php
class importComponent
{
    public function __construct($nameComponent)
    {
        $NameComponentUcfirst = ucfirst($nameComponent);
        include get_template_directory() . '/components/'."$nameComponent".'/'."$NameComponentUcfirst".'Component.php';
    }
}
?>