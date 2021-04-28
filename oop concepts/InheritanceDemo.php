<?php

// If you do not include this require_once means that : it will not able to find the objectOrientedProject.php class
require_once 'objectOrientedProject.php';

class InheritanceDemo extends objectOrientedProject
{

    private  $variableOfthis="this is a private variable";

 public function accessInheretanceProperty():string{
     // we can access private variable in public method
     return $this->surname ." - ".$this->variableOfthis;
 }
}

$inhertanceObject=new InheritanceDemo("Raj",28,"Shah 1");
echo $inhertanceObject->accessInheretanceProperty();

