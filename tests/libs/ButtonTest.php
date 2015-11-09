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

	public function test_add_button()
	{
		$object = new Button();
		$this->assertTrue( $object->add_button( 'bouton_test' ) );
	}

	public function test_register_buttons_callback() // drole d'idee!?
	{
		$object = new Button();
		$this->assertTrue( $object->register_buttons_callback( array() ) );
	}
}
