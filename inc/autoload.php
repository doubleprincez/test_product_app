<?php

// Auto Load all required classes

function loadClasses($class)
{
    $files_to_load = ['Classes', 'Controllers', 'Models'];
    $ext = ".php";

//    foreach ($files_to_load as $file) {
    $full_file_path = ucwords($class) . $ext;
    if (file_exists($full_file_path)) {
        include_once $full_file_path;
    } elseif (file_exists('../' . $full_file_path)) {
        include_once '../' . $full_file_path;
    } else {
        return false;
    }
//    }
}

spl_autoload_register('loadClasses');
session_start(); // Starting sessions immediately after loading classes;
