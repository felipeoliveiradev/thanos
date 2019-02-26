<?php
class Components
{
    public function __construct($nameComponent, $file = null)
    {
        if (empty($file)) {
            get_template_part("components/$nameComponent/frontend/view");
        } else {
            get_template_part("components/$nameComponent/frontend/$file");
        }
    }
}
?>