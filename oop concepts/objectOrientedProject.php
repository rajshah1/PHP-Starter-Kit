<?php


class objectOrientedProject
{
    private $name;
    private $age;
    public $surname;

    /**
     * objectOrientedProject constructor.
     */
    public function __construct(string $name, int $age, string $surname)
    {

        $this->name = filter_var($name ,
            FILTER_SANITIZE_STRING);
        $this->age = $age;
        $this->surname = $surname;


    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name . " - " . $this->age . " - " . $this->surname;
    }


}

$object = new objectOrientedProject("Raj", 120, "Shah");

// Direct Print will call up Implemented __toString Method of the class.
// Also you can call methods by -> then method.

// print $object->__toString();