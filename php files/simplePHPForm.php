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

echo $functioncall;

$ageNameArray=array("Raj Shah"=>10,"utsav vohra"=>30);

array_map("functionCallbacks",$ageNameArray);


