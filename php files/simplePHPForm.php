<?php


$name = $_POST["nameVar"];
// Filter Variable with Filter Var

$name = filter_var($name, FILTER_SANITIZE_STRING);
//echo $name;
$age = $_POST["age"];
$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


function functionCallbacks(string $name, int $age):string
{
    return $name . "<br> - " . $age;
}

$functioncall= functionCallbacks($name,$age);

//echo $functioncall;

$ageNameArray=array($name=>$age);


foreach ($ageNameArray as $key=>$value){
    echo functionCallbacks($key,$value);
}

// Exceptions Format in PHP

new Exception("Error Occured ",1,null);




