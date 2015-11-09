<?php
namespace DenDev\Plpwptinymce\Test;
use DenDev\Plpwptinymce\Lib\Button;


class ButtonTest extends \WP_UnitTestCase
{
	public function test_instanciate()
	{
		$object = new Button();
		$this->assertInstanceOf( "DenDev\Plpwptinymce\Lib\Button", $object );
	}
}
