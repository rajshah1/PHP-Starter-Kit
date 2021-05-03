<?php


use PHPUnit\Framework\TestCase;

class InterfaceDemoTest extends TestCase
{

    public function test_connectionOpen()
    {
        require_once '../includes/autoloader.inc.php';

        $interfaceObj = new InterfaceDemo();
        $result = $interfaceObj->connectionOpen();
        $this->assertEquals("ConnectionToDatabaseOpen", $result);

    }

    public function test_connectionClose()
    {


        $interfaceObj = new InterfaceDemo();
        $result = $interfaceObj->connectionClose();
        $this->assertEquals("ConnectionToDatabaseClosed", $result);

    }

    public function test_staticDatabaseAccessOperations()
    {

        $result = InterfaceDemo::databaseAccessOperations();
        $this->assertEquals("select * from Database", $result);

    }
}
