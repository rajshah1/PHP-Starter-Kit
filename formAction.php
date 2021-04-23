<?php

$name =$_POST['firstText'];
$age=$_POST['age'];
//echo $name."<br/>".$age ;

//echo htmlspecialchar($_SERVER["PHP_SELF"]);

function validateInput($inputField):string{
    $inputField=trim($inputField);
    $inputField=htmlspecialchars($inputField);
    return $inputField;
    
}

//echo preg_match("/^[A-Za-z ]*$/i",$name)."<br>";
$name=!empty($name) ? validateInput($name) : "<br> add name first";
$age=!empty($age) ? validateInput($age) : "add age first";

echo $name."<br>".$age;



