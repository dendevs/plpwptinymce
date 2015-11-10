<?php
namespace DenDev\Plpwptinymce\Test;
use DenDev\Plpwptinymce\Config\Config;


class ConfigTest extends \PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Config();
		$this->assertInstanceOf( 'DenDev\Plpwptinymce\Config\Config', $object );
	}

	public function test_get_value()
	{
		$object = new Config();
		$this->assertEquals( 'test ok', $object->get_value( 'test' ) );
	}

	public function test_get_path()
	{
		$object = new Config();
        $this->assertStringEndsWith( '/assets/', $object->get_value( 'assets_path' ) );
	}

	public function test_set_value()
	{
		$object = new Config();
		$object->set_value( 'test_tmp', 'test tmp ok' );
		$this->assertEquals( 'test tmp ok', $object->get_value( 'test_tmp' ) );
	}
}
