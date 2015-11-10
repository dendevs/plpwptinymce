<?php
namespace DenDev\Plpwptinymce\Test;
use DenDev\Plpwptinymce\NoKernel;
use DenDev\Plpwptinymce\Config\Config;
use DenDev\Plpwptinymce\Lib\ButtonLib;


class ButtonTest extends \WP_UnitTestCase
{
	public function setUp()
	{
		$this->_krl = new NoKernel();
		$this->_config = new Config();
	}

	public function test_instanciate()
	{
		$object = new ButtonLib( $this->_krl, $this->_config );
		$this->assertInstanceOf( 'DenDev\Plpwptinymce\Lib\ButtonLib', $object );
	}

	public function test_add_button()
	{
		$object = new ButtonLib( $this->_krl, $this->_config );
		$this->assertTrue( $object->add_button( 'bouton_test' ) );
	}

	public function test_register_buttons_callback() // drole d'idee!?
	{
		$object = new ButtonLib( $this->_krl, $this->_config );
		$object->add_button( 'bouton_test' );
        $this->assertContains( 'bouton_test' , $object->register_buttons_callback( array() ) );
	}
}
