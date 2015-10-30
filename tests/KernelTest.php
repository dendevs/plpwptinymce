<?php
use DenDev\Plpkernel\Kernel;

class KernelTest extends PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Kernel();
		$this->assertInstanceOf( "DenDev\Plpkernel\Kernel", $object );
	}

	public function test_add_service()
	{
		$object = new Kernel();
		$object->add_service_test();
		$service_test = $object->get_service_test();
		$this->assertEquals( 'test ok', $service_test->value );

	}
}

