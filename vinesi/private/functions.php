<?php
/**
 * Created by PhpStorm.
 * User: nedzo
 * Date: 21.11.18
 * Time: 13:35
 */

include('initialize.php');

function changeBackslash($str)
{
    $newPath = str_replace('\\', '/', $str);
    return $newPath;
}

function url_for($script_path)
{
    //adding leading / if not here
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }

    $_wwwRoot = WWW_ROOT . $script_path;
    $_wwwRoot = changeBackslash($_wwwRoot);
    return $_wwwRoot;
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function error_404()
{
    header($_SERVER["SERVER_PROTOCOL"] . "404 NOT FOUND");
    exit();
}

function error_500()
{
    header($_SERVER["SERVER_PROTOCOL"] . "500 Internal Server Error");

}