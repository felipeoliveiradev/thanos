<?php

function fn_custumizer_register($wp_customize)
{

    fn_dominio_custumizer_home($wp_customize);
    fn_diferencial_custumizer_home($wp_customize);
    fn_history_and_datacenter_custumizer_home($wp_customize);
    fn_institucional_custumizer_home($wp_customize);

    fn_footer_customizer($wp_customize);

}