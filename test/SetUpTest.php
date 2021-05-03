<?php


use PHPUnit\Framework\TestCase;

require_once '../includes/autoloader.inc.php';

class SetUpTest extends TestCase
{
    private $check;
    private $interfaceObj;

    public static function setUpBeforeClass(): void
    {
        // This function will be ran only one time before class
        // Database Connection can be opened .

    }



    protected function setUp(): void
    {
        // for every Test class This will be ran .
        $this->check = 0;
        $this->interfaceObj = new InterfaceDemo();
    }


    public function test_SetUpDemoTest()
    {
        $this->assertEquals(0, $this->check, "Both Values are not same.");
        $this->assertEquals("ConnectionToDatabaseOpen", $this->interfaceObj->connectionOpen());
    }

    public static function tearDownAfterClass(): void
    {
        // This function will be ran only one time after Tests are ran
        // Database Connection can be closed in this function

    }

}
