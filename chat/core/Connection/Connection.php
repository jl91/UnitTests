<?php

namespace core\Connection;

class Connection
{

	private $host = 'mysql:host=localhost;';
	private $user = 'root';
	private $pass = '';
	private $dbname = 'messenger';
	
	public function __construct()
	{
		return new PDO($this->host . "dbname={$this->dbname};", $this->user, $this->pass, array(PDO::ATTR_ERRMODE));  
	}

}
