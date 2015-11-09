<?php
use DenDev\Plpwpskeleton\Skeleton;


class SkeletonTest extends \WP_UnitTestCase
{
	public function test_instanciate()
	{
		$object = new Skeleton();
		$this->assertInstanceOf( "DenDev\Plpwpskeleton\Skeleton", $object );
	}
}

