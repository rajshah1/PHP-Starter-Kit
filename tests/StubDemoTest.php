<?php

require_once '../includes/autoloader.inc.php';

use PHPUnit\Framework\TestCase;

class StubDemoTest extends TestCase
{

    // STUB is used for the creating mock objects so that real resourse Does not have to be available.
    public function test_inheritanceStub()
    {
        // createStub creates Obj which can be used to mock the method.
        $stubObj = $this->createStub(InheritanceDemo::class);
        // method requires name which needs to be accessed. and willReturn will return value when We can the method
        // in assertEquals(_)

        $stubObj->method('accessInheritanceProperty')->willReturn("shah-stubborn");
        // So, when we call $stubObj->access... will get will return value.
        $this->assertEquals("shah-stubborn", $stubObj->accessInheritanceProperty());
    }


}
