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

}
