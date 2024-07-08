<?php 
spl_autoload_register(function($class){
    $filepath = str_replace("\\", '/', $class) . '.php';
    $fullPath=__DIR__."/".$filepath; 
    if(file_exists($fullPath)){
        require_once $fullPath;
    }else{
        echo "Files $fullPath not found.";
    }
});