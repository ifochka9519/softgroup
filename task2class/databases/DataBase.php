<?php

include 'ActiveRecord.php';

class DataBase extends ActiveRecord
{
	private $_host;
	private $_user;
	private $_password;
	private $_pdo;


	public function getHost()
	{
		return $this->_host;
	}

	public function getPassword()
	{
		return $this->_password;
	}

	public function getUser()
	{
		return $this->_user;
	}

	public function setHost($host)
	{
		$this->_host = $host;
	}

	public function setPassword($password)
	{
		$this->_password = $password;
	}

	public function setUser($user)
	{
		$this->_user = $user;
	}


	public function init()
	{
		$this->_pdo = new PDO($this->_host, $this->_user, $this->_password);
	}

	public function exec($querySql)
	{
		$statement = $this->_pdo->query($querySql);
		$statement->execute();
		$this->clear();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	public function execA($querySql)
	{
		$this->_pdo->exec($querySql);
		$this->clear();
	}
}