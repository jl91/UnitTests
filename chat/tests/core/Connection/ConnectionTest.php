<?php

namespace tests\core\Connection;
require_once '../../../vendor/autoload.php';

use core\Connection\Connection;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{

	public function setup()
	{
		define('CONFIG_PATH', '../../../core/config');
	}

	public function testConnectionIsWorking()
	{
		$connection = new Connection();
		$expected = $connection->getConnection();
		$this->assertInstanceOf('PDO', $expected);
	}
}
