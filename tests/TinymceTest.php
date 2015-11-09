<?php
namespace DenDev\Plpwptinymce\Test;
use DenDev\Plpwptinymce\Tinymce;


class TinymceTest extends \WP_UnitTestCase
{
	public function test_instanciate()
	{
		$object = new Tinymce();
		$this->assertInstanceOf( "DenDev\Plpwptinymce\Tinymce", $object );
	}
}

