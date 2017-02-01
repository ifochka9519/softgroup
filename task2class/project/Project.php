<?php

require_once '../databases/DataBase.php';
class Project
{
	public function __construct()
	{
	}

	private $_config = array(
		'host' => 'mysql:host=localhost;dbname=football',
		'user' => 'root',
		'password' => ''
	);

	public function loadDB()
	{
		$db = new DataBase();

		$db->setHost($this->_config['host']);
		$db->setUser($this->_config['user']);
		$db->setPassword($this->_config['password']);

		$db->init();

		$GLOBALS['db'] = $db;

	}

}