<?php

function setInitialErrorsPhp()
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

function dd($var, $type)
{
    echo "<pre>";
    $typp = match ($type) {
        'v' => var_dump($var),
        'p' => print_r($var)
    };
    echo "</pre>";
}


function teste()
{
    $tt = 'boddu';
    if (str_ends_with($tt, 'y')) {
                echo rtrim($tt, 'y') . 'ies';
    } else {
        echo $tt . 's';
    }

    //if (substr($tt, -1) == "y") {
       
}
