<?php

/*function MyClasses($classe)
{
    $tab = split('[\\]', $classe);
    if (file_exists('./classes/'.$tab[1].'.class.php'))
        require_once ('./classes/'.$tab[1].'.class.php');
}*/

function loadApi($classe)
{
    $api = split('[\\]', $classe);
    if (file_exists('./api/'.$api[0].'/'.$api[0].'.php'))
        require_once './api/'.$api[0].'/'.$api[0].'.php';
}

spl_autoload_register('loadApi');