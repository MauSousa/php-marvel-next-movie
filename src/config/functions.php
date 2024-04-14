<?php

require('constants.php');
require(DIR_BASE.'/vendor/autoload.php');

function load_env()
{
    $dotenv = Dotenv\Dotenv::createImmutable(DIR_BASE);
    $dotenv->load();
}

function dede(string|array $text)
{
    echo '<pre>';
    var_export($text);
    echo '</pre>';
}
