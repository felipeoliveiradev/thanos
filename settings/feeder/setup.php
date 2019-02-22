<?php

function feederComponents($type, $path, $file){
    require get_template_directory() . "/feeder/$type/$path/$file.php";
}

function feederNecessary($path){
    require get_template_directory() . "/feeder/$path/setup.php";
}