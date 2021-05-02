<?php

// If you do not include this require_once means that : it will not able to find the objectOrientedProject.php class
  require_once 'objectOrientedProject.php';


// this is more smart way to auto load classes always include this autoloader script where you initialize
// class ex new Person("sas");

require_once '../includes/autoloader.inc.php';

class InheritanceDemo extends objectOrientedProject
{

    private $variableOfthis = "this is a private variable";

    // static Variable declaration
    public static $race = "American";

    public function accessInheritanceProperty(): string
    {
        // we can access private variable in public method
        return $this->surname . " - " . self::$race;
    }


    public static function staticMethod(string $accessToStaticVariable): string
    {
        // access static variable and change it.
        self::$race = $accessToStaticVariable;
        return "<br>New Race is : " . self::$race;
    }
}

//$inhertanceObject = new InheritanceDemo("Raj", 28, "Shah 1");
//echo $inhertanceObject->accessInheritanceProperty();
// static variable access
//echo InheritanceDemo::$race;
// static Method access
//echo InheritanceDemo::staticMethod("Indian");

