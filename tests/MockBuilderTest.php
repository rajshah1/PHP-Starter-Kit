<?php


use PHPUnit\Framework\TestCase;

class MockBuilderTest extends TestCase
{
    /** @tests
     */
    public function test_mockerTest()
    {
        // Creating Mock Builder Object Like This where we use getMockBuilder(ClassName) and getMock()

        //$stubObj gives the same stub Method and willReturn format
        require_once '../includes/autoloader.inc.php';
        $stubObj = $this->getMockBuilder(InterfaceDemo::class)
            ->disableArgumentCloning()
            ->disableOriginalConstructor()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $stubObj->method('connectionOpen')->willReturn("MockerBuilder Test");

        // returnArgument() will return argument as return type

        // $stubObj->method('connectionOpen')->will($this->returnArgument(0));
        // Argument can be changed as per events.


        // Run Callback Functions like AutoLoader.inc.php class

        // $stubObj->method('connectionOpen')->will($this->returnCallback('strtoupper'));
        // when we call connectionOpen method above line will create strtoupper(argument) in return response.

        // onConsecutiveCall('Raj','Pranav','shah')

        // Test Error Handling using throwException(new Exception)


        $this->assertSame('MockerBuilder Test', $stubObj->connectionOpen());


    }

}
