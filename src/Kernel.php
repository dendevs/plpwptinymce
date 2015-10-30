<?php
namespace DenDev\Plpkernel;
require_once 'vendor/autoload.php';
use Pimple\Container;

class Kernel
{
	private $_container;

	public function __construct()
	{
		$this->_container = new Container();
	}

	// add
	public function add_service_test()
	{
		$id = 'test';

		$function = function( $c ){
			$obj = new \stdClass;
			$obj->value = 'test ok';
			return $obj;
		};

		return $this->_add_service( $id, $function );
	}

	private function _add_service( $id, $function )
	{
		return $this->_container[$id] = $function;
	}

	// get
	public function get_service_test()
	{
		return $this->_get_service( 'test' );
	}

	private function _get_service( $id )
	{
		return $this->_container[$id];
	}

}
