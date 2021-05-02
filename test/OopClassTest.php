<?php


use PHPUnit\Framework\TestCase;


class OopClassTest extends TestCase
{
    /** @test */
    public function InheritanceDemoTest()
    {
        require_once '../includes/autoloader.inc.php';

        $inheritanceObj = new InheritanceDemo("Raj", 24, "shah");
        $result = $inheritanceObj->accessInheritanceProperty();

        $this->assertEquals("shah - American", $result, "Both Values are not matching $result is not same as shah - India");
    }
}
