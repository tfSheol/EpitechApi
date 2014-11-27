<?php

/*function MyClasses($classe)
{
    $tab = split('[\\]', $classe);
    if (file_exists('./classes/'.$tab[1].'.class.php'))
        require_once ('./classes/'.$tab[1].'.class.php');
}*/

function loadApi($api)
{
    if (file_exists('./api/'.$api.'/'.$api.'.php'))
        require_once './api'.$api.'/'.$api.'.php';
}

spl_autoload_register('loadApi');