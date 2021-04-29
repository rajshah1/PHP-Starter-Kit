<?php

// This is a AutoLoader Function Call which needs to be included in any place where we want
// to access classes

spl_autoload_register('autoloadClass');

function autoloadClass(string $className){
    $folderPath="../oop concepts/";
    $extension=".php";
    $fullPathToClass=$folderPath.$className.$extension;

    if(!file_exists($fullPathToClass)){
        return false;
    }
    include_once $fullPathToClass;
}