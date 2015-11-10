<?php
namespace DenDev\Plpwptinymce\Test;
use DenDev\Plpwptinymce\Config\Config;


class ConfigTest extends \PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Config();
		$this->assertInstanceOf( "DenDev\Plpwptinymce\Config\Config", $object );
	}
}
